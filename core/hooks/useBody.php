<?php

/**
 * request body data
 * @function useBody
 * @param string|null $key
 * @return string|array
 */
function useBody(?string $key=null): string|array {
    $parsedBody = json_decode(file_get_contents("php://input"), true);

    return isset($key) ? $parsedBody[$key] : $parsedBody;
}