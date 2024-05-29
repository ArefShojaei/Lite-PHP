<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");


/**
 * Add custom Log message
 * @function useLog
 * @param string $message
 * @param string $filename
 * @return void
 */
function useLog(string $message, string $filename = "app"): void {
    # get file path
    $filePath = useEnum("Logger@LOGS_PATH") . "/" . $filename . LOG_FILE_EXTENTION;

    # log content
    $content = "[INFO] {$message}";

    # append the log content to the file
    file_put_contents($filePath, $content . PHP_EOL, FILE_APPEND);
}