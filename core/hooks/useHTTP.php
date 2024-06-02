<?php

/**
 * Get header by name
 * @function useHTTP
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useHTTP(string $key = null, mixed $defaultValue = null): mixed {
    # Get all Headers
    if(!isset($key)) {
        return $_SERVER;
    }
    
    # Get Header by key
    if(!isset($defaultValue)) {
        return $_SERVER[$key] ?? null;
    }

    # set Header by key & value
    $_SERVER[$key] = $defaultValue;

    return true;
}