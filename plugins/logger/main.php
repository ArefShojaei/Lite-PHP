<?php

import("@core/modules/plugin/createPlugin");
import("@core/hooks/useHTTP");
import("@core/hooks/useEnum");
import("@core/helpers/build");
import("@plugins/logger/_enum");
import("@plugins/logger/_constants");
import("@plugins/logger/_makeLogContent");
import("@plugins/logger/_clearLogs");


/**
 * @type Runner
 */
createPlugin("logger", function($params) {
    $filename = $params["name"] ?? useEnum("Logger::NAME");

    $filePath = buildPath(LOGS_PATH, "/{$filename}", LOG_FILE_EXTENTION);

    $level = strtolower($params['level']) ?? useEnum("Logger::DEFAULT_LEVEL");
    
    $expireTime = $params['expireTime'] ?? useEnum("Logger::EXPIRE_TIME_FOR_24H");

    $content = _makeLogContent($level);

    # Add the log content to the file
    file_put_contents($filePath, $content, FILE_APPEND);

    # Clear all logs after 24h
    _clearLogs($filePath, $expireTime);
}, false);