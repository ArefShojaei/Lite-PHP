<?php

import("@core/helpers/parse");


/**
 * Get the Request body data
 */
function useBody(string $key = null): mixed {
    $parsedBody = json_decode(parse("php://input"), true) ?? [];

    return isset($key) ? $parsedBody[$key] : $parsedBody;
}