<?php

/**
 * @package
 */
import("@core/helpers/parse");


/**
 * Get the Request body data
 * @function useBody
 * @param string $key
 * @return string|array
 */
function useBody(string $key = null): string|array {
    $parsedBody = json_decode(parse("php://input"), true);

    return isset($key) ? $parsedBody[$key] : $parsedBody;
}