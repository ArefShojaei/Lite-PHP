<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * use the response http
 * @function useResponse
 * @param string $name
 * @param string|array $value
 * @param int $code HTTP status code
 * @return string
 */
function useResponse(string $action, string|array $value, int $code = 200): string {
    isset($code) && http_response_code($code);
    
    /**
     * JSON content
     * @param array $value
     * @return string
     */
    function json(array $value): string {
        # set content-type
        useType("application/json");

        # reutrn the $value as json
        return json_encode($value);
    }

    /**
     * HTML content
     * @param string $value
     * @return string
     */
    function html(string $value): string {
        # set content-type
        useType("text/html");
        
        # reutrn the $value as HTML
        return $value;
    }


    /**
     * Text content
     * @param string $value
     * @return string
     */
    function text(string $value): string {
        # set content-type
        useType("text/plain");
        
        # return the $value as pure text
        return $value;
    }

    
    # call the $action
    return $action($value);
}