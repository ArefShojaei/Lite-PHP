<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");


/**
 * add custom log message
 * @param string $filename
 * @param string $message
 * @return void
 */
function useLog(string $filename, string $message): void {
    $file = useEnum("Logger@LOGS_PATH") . "/" . $filename . ".log";

    $content = "[ADDITION] {$message}";

    file_put_contents($file, $content . PHP_EOL, FILE_APPEND);
}