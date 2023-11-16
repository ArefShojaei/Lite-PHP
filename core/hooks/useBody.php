<?php

/**
 * request body data
 * @function useBody
 * @param null|string $key
 * @return string|array
 */
function useBody(?string $key = null): string|array {
    $parsedBody = json_decode(file_get_contents("php://input"), true);

    return $key ? $parsedBody[$key] : $parsedBody;
}