<?php

/**
 * Get & Set HTTP header
 */
function useHTTP(string $key = null, mixed $value = null): mixed {
    # Get all Headers
    if(!isset($key)) return $_SERVER;
    
    # Get Header by key
    if(!isset($value)) return $_SERVER[$key] ?? null;

    # Set Header by key & value
    $_SERVER[$key] = $value;

    return true;
}