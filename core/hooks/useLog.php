<?php

import("@core/helpers/build");


/**
 * Add custom Log message
 */
function useLog(string $message, string $filename = "app"): void {
    $filePath = buildPath(LOGS_PATH . "/", $filename, LOG_FILE_EXTENTION);

    # Log content
    $content = "[INFO] {$message}";

    # append the log content to the file
    file_put_contents($filePath, $content . PHP_EOL, FILE_APPEND);
}