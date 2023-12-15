<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request method
 * @function method
 * @private
 * @return string
 */
function method(): string {
    return useHTTP("REQUEST_METHOD");
}

/**
 * request url as "route"
 * @function route
 * @private
 * @return string
 */
function route(): string {
    return useHTTP("REQUEST_URI");
}

/**
 * server host
 * @function host
 * @private
 * @return string
 */
function host(): string {
    return useHTTP("HTTP_HOST");
}

/**
 * request protocol
 * @function protocol
 * @private
 * @return string
 */
function protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}

/**
 * request client user-agent
 * @function userAgent
 * @private
 * @return string
 */
function userAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}

/**
 * request client ip
 * @function ip
 * @private
 * @return string
 */
function ip(): string {
    return useHTTP("REMOTE_ADDR");
}

/**
 * request route params
 * @function params 
 * @private
 * @return array
 */
function params(): array {
    return useHTTP("params");
}

/**
 * request route query string
 * @function query
 * @private
 * @return array
 */
function query(): array {
    # parse the query string
    parse_str(useHTTP("QUERY_STRING"), $queries);
        
    # remove first data from the $queries
    array_shift($queries);

    # return the $queries
    return $queries;
}



/**
 * use the request http
 * @function useRequest
 * @param string $action
 * @return string|array
 */
function useRequest(string $action): string|array {
    # call $aciton dynamicly
    return $action();
}