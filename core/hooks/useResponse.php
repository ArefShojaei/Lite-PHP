<?php

/**
 * @package
 */
import("@core/private/hooks/useResponse/_json");
import("@core/private/hooks/useResponse/_html");
import("@core/private/hooks/useResponse/_text");


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