<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");
import("@core/hooks/useEnum");
import("@core/helpers/build");
import("@plugins/logger/_enum");
import("@plugins/logger/_isExistsLogsPath");
import("@plugins/logger/_makeLogsDir");
import("@plugins/logger/_makeLogContent");
import("@plugins/logger/_clearLogs");


/**
 * Logger plugin
 * @type runner
 */
createPlugin("logger", function() {
    # request url
    $url = useHTTP("REQUEST_URI");
    
    # request method
    $method = useHTTP("REQUEST_METHOD");
    
    # request protocol
    $protocol = useHTTP("REQUEST_SCHEME");

    # log filename
    $filename = useEnum("Logger@NAME");

    # logs path as base path
    $basePath = useEnum("Logger@LOGS_PATH");

    # log file path
    $filePath = buildPath($basePath, "/{$filename}", LOG_FILE_EXTENTION);

    # log content for every request
    $content = _makeLogContent([$protocol, $method, $url,]);

    # check to exists $basePath
    if(!_isExistsLogsPath($basePath)) _makeLogsDir($basePath);

    # add the log content to the file
    file_put_contents($filePath, $content, FILE_APPEND);

    # clear all logs after 24h
    _clearLogs($filePath);
}, false);