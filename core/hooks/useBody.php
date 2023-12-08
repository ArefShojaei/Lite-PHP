<?php

/**
 * @package
 */
require_once "core/helpers/parse.php";


/**
 * get request body data
 * @function useBody
 * @param string $key
 * @return string|array
 */
function useBody(string $key = null): string|array {
    $parsedBody = json_decode(parse("php://input"), true);

    return $key ? $parsedBody[$key] : $parsedBody;
}