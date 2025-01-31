<?php

import("@plugins/logger/_enum");
import("@core/hooks/useEnum");
import("@core/hooks/useHTTP");


/**
 * @private
 */
function _makeLogContent(string $level): string {
    $level = useEnum("Logger::LEVELS")[$level];
    
    # Request data
    $url = useHTTP("REQUEST_URI");
    
    $method = useHTTP("REQUEST_METHOD");
    
    $protocol = useHTTP("REQUEST_SCHEME");
    
    $ip = useHTTP("REMOTE_ADDR");
    
    $httpVersion = useHTTP("SERVER_PROTOCOL");
    
    $userAgent = useHTTP("HTTP_USER_AGENT");
    
    $host = useHTTP("HTTP_HOST");
    
    # Current date
    $date = date("Y/m/d H:i:s -");


    # Get log content by level
    return match ($level) {
        LOGGER_SHORT_LEVEL => "[{$level}] {$date} {$method} {$url}" . PHP_EOL,
        LOGGER_COMMON_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$method} {$url}" . PHP_EOL,
        LOGGER_COMBINED_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$httpVersion} {$host} {$method} {$url} -- {$userAgent}" . PHP_EOL,
    };
}