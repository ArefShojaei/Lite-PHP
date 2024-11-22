<?php

import("@core/modules/plugin/createPlugin");
import("@core/helpers/build");
import("@core/hooks/useRecord");
import("@core/hooks/useTable");


/**
 * @type Runner
 */
createPlugin("localDatabaseCleaner", function($params) {
    $filePaths = buildPath(DATABASE_PATH, "/tables/*", JSON_FILE_EXTENTION);

    $files = glob($filePaths);
    
    # -------------- Timestamps --------------
    $expireTime = $params["expireTime"];

    $currentTimestamp = time();

    $futureTimestamp = $currentTimestamp + $expireTime;
    
    useRecord("timestamps", "localDB", $futureTimestamp);
    
    $cachedTimestamp = useTable("timestamps", "localDB");
    # ----------------------------------------

    if ($currentTimestamp > $cachedTimestamp) foreach ($files as $file) file_put_contents($file, "");
}, false);