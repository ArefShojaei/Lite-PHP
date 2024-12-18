<?php

import("@core/helpers/build");


/**
 * Add custom Log message
 */
function useLog(string $message, string $level = LOG_INFO_LEVEL, string $filename = "app"): void {
    $filePath = buildPath(LOGS_PATH . "/", $filename, LOG_FILE_EXTENTION);

    $currentDate = date("Y/m/d H:m:sa"); 

    $content = "[{$level}] {$currentDate} {$message}";

    file_put_contents($filePath, $content . PHP_EOL, FILE_APPEND);
}