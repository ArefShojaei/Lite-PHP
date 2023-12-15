<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request method
 * @function _method
 * @private
 * @return string
 */
function _method(): string {
    return useHTTP("REQUEST_METHOD");
}

/**
 * request url as "route"
 * @function _route
 * @private
 * @return string
 */
function _route(): string {
    return useHTTP("REQUEST_URI");
}

/**
 * server host
 * @function _host
 * @private
 * @return string
 */
function _host(): string {
    return useHTTP("HTTP_HOST");
}

/**
 * request protocol
 * @function _protocol
 * @private
 * @return string
 */
function _protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}

/**
 * request client user-agent
 * @function _userAgent
 * @private
 * @return string
 */
function _userAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}

/**
 * request client ip
 * @function _ip
 * @private
 * @return string
 */
function _ip(): string {
    return useHTTP("REMOTE_ADDR");
}

/**
 * request route params
 * @function _params 
 * @private
 * @return array
 */
function _params(): array {
    return useHTTP("params");
}

/**
 * request route query string
 * @function _query
 * @private
 * @return array
 */
function _query(): array {
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
    return ("_" . $action)();
}