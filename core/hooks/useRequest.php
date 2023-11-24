<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * use request http
 * @function useRequest
 * @param string $name
 * @return string|array
 */
function useRequest(string $name): string|array {
    /**
     * request method
     * @return string
     */
    function method(): string {
        return useHTTP("REQUEST_METHOD");
    }

    /**
     * request url as "route"
     * @return string
     */
    function route(): string {
        return useHTTP("REQUEST_URI");
    }

    /**
     * server host
     * @return string
     */
    function host(): string {
        return useHTTP("HTTP_HOST");
    }

    /**
     * request protocol
     * @return string
     */
    function protocol(): string {
        return useHTTP("REQUEST_SCHEME");
    }

    /**
     * request client user-agent
     * @return string
     */
    function userAgent(): string {
        return useHTTP("HTTP_USER_AGENT");
    }

    /**
     * request client ip
     * @return string
     */
    function ip(): string {
        return useHTTP("REMOTE_ADDR");
    }


    return $name();
}