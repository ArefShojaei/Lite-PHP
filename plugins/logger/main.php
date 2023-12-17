<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");
import("@core/hooks/useEnum");
import("@core/helpers/build");
import("@plugins/logger/_constants");
import("@plugins/logger/_enum");
import("@plugins/logger/_isExistsLogsPath");
import("@plugins/logger/_makeLogsDir");
import("@plugins/logger/_makeLogContent");
import("@plugins/logger/_clearLogs");


/**
 * Logger plugin
 * @type runner
 */
createPlugin("logger", function($params) {
    # log filename
    $filename = $params["name"] ?? useEnum("Logger@NAME");

    # base path as logs path 
    $basePath = useEnum("Logger@LOGS_PATH");

    # log file path
    $filePath = buildPath($basePath, "/{$filename}", LOG_FILE_EXTENTION);

    # log level
    $level = strtolower($params['level']) ?? LOGGER_DEFAULT_SHORT_LEVEL;
    
    # log expire time
    $expireTime = $params['expireTime'] ?? LOGGER_EXPIRE_TIME_FOR_24H;

    # log content as string
    $content = _makeLogContent($level);

    # check to exists $basePath
    if(!_isExistsLogsPath($basePath)) _makeLogsDir($basePath);
    
    # add the log content to the file
    file_put_contents($filePath, $content, FILE_APPEND);

    # clear all logs after 24h
    _clearLogs($filePath, $expireTime);
}, false);