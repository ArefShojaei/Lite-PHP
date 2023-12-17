<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");
import("@core/hooks/useHTTP");


/**
 * make log content
 * @function _makeLogContent
 * @private
 * @param string $level log level
 * @return string
 */
function _makeLogContent(string $level): string {
    # log level
    $level = useEnum("Logger@LEVELS")[$level];
    
    # request url
    $url = useHTTP("REQUEST_URI");
    
    # request method
    $method = useHTTP("REQUEST_METHOD");
    
    # request protocol
    $protocol = useHTTP("REQUEST_SCHEME");
    
    # request ip
    $ip = useHTTP("REMOTE_ADDR");
    
    # http version
    $httpVersion = useHTTP("SERVER_PROTOCOL");
    
    # client user agent
    $userAgent = useHTTP("HTTP_USER_AGENT");
    
    # request host
    $host = useHTTP("HTTP_HOST");
    
    # current date
    $date = date("Y:m:d H:i:s -");


    # return log content
    return match ($level) {
        LOGGER_SHORT_LEVEL => "[{$level}] {$date} {$method} {$url}" . PHP_EOL,
        LOGGER_COMMON_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$method} {$url}" . PHP_EOL,
        LOGGER_COMBINED_LEVEL => "[{$level}] {$date} {$ip} {$protocol} {$httpVersion} {$host} {$method} {$url} -- {$userAgent}" . PHP_EOL,
    };
}