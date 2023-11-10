<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * response http
 * @function useResponse
 * @param string $name
 * @param string|array $value
 * @return string
 */
function useResponse(string $name, string|array $value = null): string {
    function json($value): string {
        useType("application/json");

        return json_encode($value);
    }

    function html($value): string {
        useType("text/html");

        return $value;
    }

    function text($value): string {
        useType("text/plain");
        
        return $value;
    }

    return $name($value);
}