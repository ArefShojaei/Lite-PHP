<?php

/**
 * @desc request http
 * @function useRequest
 * @param {string} $name
 * @return {string}
 */
function useRequest(string $name): string {
    function method(): string {
        return $_SERVER["REQUEST_METHOD"];
    }

    function route(): string {
        return $_SERVER["REQUEST_URI"];
    }

    function host(): string {
        return $_SERVER["HTTP_HOST"];
    }

    function userAgent(): string {
        return $_SERVER["HTTP_USER_AGENT"];
    }

    function protocol(): string {
        return $_SERVER["REQUEST_SCHEME"];
    }

    function ip(): string {
        return $_SERVER["REMOTE_ADDR"];
    }

    return $name();
}