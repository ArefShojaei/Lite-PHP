<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");
import("@core/hooks/useHTTP");


/**
 * Mmake log content
 * @function _makeLogContent
 * @private
 * @param string $level Log level
 * @return string
 */
function _makeLogContent(string $level): string {
    # Log level
    $level = useEnum("Logger::LEVELS")[$level];
    
    # Request url
    $url = useHTTP("REQUEST_URI");
    
    # Request method
    $method = useHTTP("REQUEST_METHOD");
    
    # Request protocol
    $protocol = useHTTP("REQUEST_SCHEME");
    
    # Request ip
    $ip = useHTTP("REMOTE_ADDR");
    
    # Http version
    $httpVersion = useHTTP("SERVER_PROTOCOL");
    
    # Request client user agent
    $userAgent = useHTTP("HTTP_USER_AGENT");
    
    # Request host
    $host = useHTTP("HTTP_HOST");
    
    # Current date
    $date = date("Y:m:d H:i:s -");


    # Return log content
    return match ($level) {
        LOGGER_SHORT_LEVEL => "[{$level}] {$date} {$method} {$url}" . PHP_EOL,
        LOGGER_COMMON_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$method} {$url}" . PHP_EOL,
        LOGGER_COMBINED_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$httpVersion} {$host} {$method} {$url} -- {$userAgent}" . PHP_EOL,
    };
}