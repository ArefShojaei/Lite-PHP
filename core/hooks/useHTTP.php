<?php

/**
 * Get HTTP header by name
 */
function useHTTP(string $key = null, mixed $defaultValue = null): mixed {
    # Get all Headers
    if(!isset($key)) return $_SERVER;
    
    # Get Header by key
    if(!isset($defaultValue)) return $_SERVER[$key] ?? null;

    # Set Header by key & value
    $_SERVER[$key] = $defaultValue;

    return true;
}