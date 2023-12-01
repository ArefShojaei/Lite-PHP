<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * use response http
 * @function useResponse
 * @param string $name
 * @param string|array $value
 * @param int $code HTTP status code
 * @return string
 */
function useResponse(string $name, string|array $value, int $code = 200): string {
    isset($code) && http_response_code($code);
    
    /**
     * JSON content
     * @param array $value
     * @return string
     */
    function json(array $value): string {
        useType("application/json");

        return json_encode($value);
    }

    /**
     * HTML content
     * @param string $value
     * @return string
     */
    function html(string $value): string {
        useType("text/html");

        return $value;
    }


    /**
     * Text content
     * @param string $value
     * @return string
     */
    function text(string $value): string {
        useType("text/plain");
        
        return $value;
    }

    
    return $name($value);
}