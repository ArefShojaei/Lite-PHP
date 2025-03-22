<?php

/**
 * Clean log file content every on 24h
 */
function _clearLogs(string $filePath, int $expireTime): void {
    if(file_exists($filePath)) {
        $currentTime = time();
        
        $fileCreationTime = fileatime($filePath);

        # After 24h time
        $nextTime = $fileCreationTime + $expireTime;

        # Delete the log file
        $currentTime > $nextTime && unlink($filePath);
    }
}