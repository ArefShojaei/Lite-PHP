<?php

/**
 * @package
 */
import("@core/shared/hooks/useResponse/_json");
import("@core/shared/hooks/useResponse/_html");
import("@core/shared/hooks/useResponse/_text");


/**
 * response info
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