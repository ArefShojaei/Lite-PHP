<?php

import("@core/hooks/useError");
import("@core/helpers/parse");
import("@core/helpers/build");
import("@core/hooks/useRecord");
import("@core/hooks/useTable");


/**
 * Get & Set cache data
 */
function useCache(string $name, array $data = null, int $expireTime = TIME_ONE_HOURE): string|bool {
    $filename = md5($name);

    $filePath = buildPath(CACHE_PATH . "/", $filename, JSON_FILE_EXTENTION);

    
    # -------------- Timestamps --------------
    $cachedTimestamp = useTable("timestamps", $name);
    
    $currentTimestamp = time();
    
    $futureTimestamp = $currentTimestamp + $expireTime;
    # ----------------------------------------


    # Delete the cached file & record
    if (file_exists($filePath) && isset($cachedTimestamp) && $cachedTimestamp < $futureTimestamp) {
        # Delete the file
        unlink($filePath);

        # Delete the cached timestamp data from local database
        useTable("timestamps", $name, TABLE_DELETE_ACTION);

        return true;
    }

    # Get the cached data  
    if (!isset($data) || is_null($data)) return parse($filePath);


    # Set the data
    useRecord("timestamps", $name, $futureTimestamp);

    file_put_contents($filePath, json_encode($data));

    return true;
}