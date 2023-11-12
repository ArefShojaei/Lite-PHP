<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");
import("@core/hooks/useEnum");
import("@plugins/logger/_enum");


/**
 * Logger plugin
 * @type runner
 */
createPlugin("logger", function() {
    # use HTTP headers
    $url = useHTTP("REQUEST_URI");
    $method = useHTTP("REQUEST_METHOD");
    $protocol = useHTTP("REQUEST_SCHEME");


    # declare log filename
    $filename = useEnum("Logger@NAME");

    # declare log level
    $level = useEnum("Logger@LEVEL");

    # declare base path
    $basePath = useEnum("Logger@LOGS_PATH");

    # log file path
    $filePath = "{$basePath}/{$filename}.log";

    # log content for every request
    $content = "[{$level}] {$protocol} {$method} {$url}" . PHP_EOL;

    # is dir for the base path
    if(!is_dir($basePath)) {
        mkdir(useEnum("Logger@BASE_PATH"));
        mkdir($basePath);
    }

    # put the log content to the path
    file_put_contents($filePath, $content, FILE_APPEND);
}, false);