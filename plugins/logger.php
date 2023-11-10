<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");


/**
 * Logger plugin
 * @type runner
 * @see "core/modules/plugin/createPlugin" module
 */
createPlugin("logger", function() {
    # use HTTP headers
    $url = useHTTP("REQUEST_URI");
    $method = useHTTP("REQUEST_METHOD");
    $protocol = useHTTP("REQUEST_SCHEME");


    # declare log filename
    $filename = "app";

    # declare log level
    $level = "INFO";

    # declare base path
    $basePath = "storage/logs/";

    # log file path
    $filePath = "{$basePath}/{$filename}.log";

    # log content for every request
    $content = "[{$level}] {$protocol} {$method} {$url}" . PHP_EOL;

    # is dir for the base path
    if(!is_dir($basePath)) {
        mkdir("storage");
        mkdir($basePath);
    }

    # put the log content to the path
    file_put_contents($filePath, $content, FILE_APPEND);
}, false);