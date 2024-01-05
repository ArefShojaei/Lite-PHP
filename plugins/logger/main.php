<?php

/**
 * @package
 */
import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");
import("@core/hooks/useEnum");
import("@core/helpers/build");
import("@plugins/logger/_enum");
import("@plugins/logger/_constants");
import("@plugins/logger/_makeLogContent");
import("@plugins/logger/_clearLogs");


/**
 * Logger plugin
 * @type runner
 */
createPlugin("logger", function($params) {
    # log filename
    $filename = $params["name"] ?? useEnum("Logger::NAME");

    # log file path
    $filePath = buildPath(BASE_LOGS_PATH, "/{$filename}", LOG_FILE_EXTENTION);

    # log level
    $level = strtolower($params['level']) ?? useEnum("Logger::DEFAULT_LEVEL");
    
    # log expire time
    $expireTime = $params['expireTime'] ?? useEnum("Logger::EXPIRE_TIME_FOR_24H");

    # log content as string
    $content = _makeLogContent($level);

    # add the log content to the file
    file_put_contents($filePath, $content, FILE_APPEND);

    # clear all logs after 24h
    _clearLogs($filePath, $expireTime);
}, false);