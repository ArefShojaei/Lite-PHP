<?php

/**
 * clean log file content every on 24h
 */
function _clearLogs(string $filePath): void {
    if(file_exists($filePath)) {
        # current time
        $currentTime = time();
        
        # file creation time
        $fileCreationTime = fileatime($filePath);

        # after 24h time
        $nextTime = $fileCreationTime + (60 * 60 * 24); # 24H

        # delete the log file
        $currentTime > $nextTime && unlink($filePath);
    }
}