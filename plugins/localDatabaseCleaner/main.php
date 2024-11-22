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
    
    
    foreach ($files as $file) {
        $fileCreationTime = fileatime($file);

        $futureTimestamp = $fileCreationTime + $expireTime;
        
        # Delete the file
        if (file_exists($file)) $currentTimestamp > $futureTimestamp && unlink($file);
    }
}, false);