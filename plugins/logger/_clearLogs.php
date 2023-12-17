<?php

/**
 * clean log file content every on 24h
 * @function _clearLogs
 * @private
 * @param string $filePath
 * @param int $expireTime
 * @return void
 */
function _clearLogs(string $filePath, int $expireTime): void {
    if(file_exists($filePath)) {
        # current time
        $currentTime = time();
        
        # file creation time
        $fileCreationTime = fileatime($filePath);

        # after 24h time
        $nextTime = $fileCreationTime + $expireTime;

        # delete the log file
        $currentTime > $nextTime && unlink($filePath);
    }
}