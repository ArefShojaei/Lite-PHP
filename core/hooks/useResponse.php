<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * JSON content
 * @function _json
 * @private
 * @param array $value
 * @return string
 */
function _json(array $value): string {
    # set content-type
    useType("application/json");
    # reutrn the $value as json
    return json_encode($value);
}

/**
 * HTML content
 * @function _html
 * @private
 * @param string $value
 * @return string
 */
function _html(string $value): string {
    # set content-type
    useType("text/html");
    
    # reutrn the $value as HTML
    return $value;
}

/**
 * Text content
 * @function _text
 * @param string $value
 * @return string
 */
function _text(string $value): string {
    # set content-type
    useType("text/plain");
    
    # return the $value as pure text
    return $value;
}



/**
 * use the response http
 * @function useResponse
 * @param string $action
 * @param string|array $value
 * @param int $code HTTP status code
 * @return string
 */
function useResponse(string $action, string|array $value, int $code = 200): string {
    # set http status code
    isset($code) && http_response_code($code);
    
    # call $action dynamicly
    return ("_" . $action)($value);
}