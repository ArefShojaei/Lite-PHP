<?php

/**
 * @desc request body data
 * @function useBody
 * @param {string} $key
 * @param {string} $isArrayType
 * @return {string|array|object}
 */
function useBody(string $key=null, bool $isArrayType=true): string|array|object {
    $parsedBody = json_decode(file_get_contents("php://input"), $isArrayType);

    return $key ? $parsedBody[$key] : $parsedBody;
}