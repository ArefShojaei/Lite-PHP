<?php

/**
 * Get the Request body data
 * @function useBody
 * @param string $key
 * @return mixed
 */
function useBody(string $key = null): mixed {
    $parsedBody = json_decode(file_get_contents("php://input"), true) ?? [];

    return isset($key) ? $parsedBody[$key] : $parsedBody;
}