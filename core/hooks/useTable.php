<?php

import("@core/helpers/build");
import("@core/helpers/parse");


/**
 * Get & Delete data form local database
 */
function useTable(string $name, string $key, string $action = TABLE_GET_ACTION): string|array|bool {
    $data = null;

    $filePath = buildPath(DATABASE_PATH . "/tables/", $name, JSON_FILE_EXTENTION);

    
    if (!file_exists($filePath)) file_put_contents($filePath, "");
    
    if (file_exists($filePath)) $data = json_decode(parse($filePath), true);

    
    $index = strlen($key) % 10;


    # Delete the data
    if ($action === TABLE_DELETE_ACTION) {
        if (!array_key_exists($key, $data[$index])) return false;
        
        unset($data[$index][$key]);

        file_put_contents($filePath, json_encode($data));

        return true;
    }

    # Get the data
    $result = $data[$index][$key] ?? false;

    return is_string($result) ? htmlspecialchars($result) : $result;
}