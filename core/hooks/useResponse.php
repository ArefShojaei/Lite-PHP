<?php

import("@core/shared/hooks/useResponse/_json");
import("@core/shared/hooks/useResponse/_html");
import("@core/shared/hooks/useResponse/_text");


/**
 * Send HTTP Response
 */
function useResponse(string $action, string|array $value, int $code = 200): string {
    # Set http status code
    isset($code) && http_response_code($code);

    # Call $action dynamicly
    return ("_" . $action)($value);
}