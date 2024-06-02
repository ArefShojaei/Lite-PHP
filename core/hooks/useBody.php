<?php

/**
 * @package
 */
import("@core/helpers/parse");


/**
 * Get the Request body data
 * @function useBody
 * @param string $key
 * @return mixed
 */
function useBody(string $key = null): mixed {
    $parsedBody = json_decode(parse("php://input"), true) ?? [];

    return isset($key) ? $parsedBody[$key] : $parsedBody;
}