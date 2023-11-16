<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * use request http
 * @function useRequest
 * @param string $name
 * @return string
 */
function useRequest(string $name): string {
    function method(): string {
        return useHTTP("REQUEST_METHOD");
    }

    function route(): string {
        return useHTTP("REQUEST_URI");
    }

    function host(): string {
        return useHTTP("HTTP_HOST");
    }

    function userAgent(): string {
        return useHTTP("HTTP_USER_AGENT");
    }

    function protocol(): string {
        return useHTTP("REQUEST_SCHEME");
    }

    function ip(): string {
        return useHTTP("REMOTE_ADDR");
    }

    return $name();
}