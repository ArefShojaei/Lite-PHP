<?php

/**
 * Get & Set session
 */
function useSession(string $key = null, mixed $defaultValue = null): mixed {
    # Get all Sessions
    if(!isset($key)) return $_SESSION; 
    
    # Get Session by key 
    if(isset($key) && !isset($defaultValue)) return $_SESSION[$key] ?? null;


    # Set session
    $_SESSION[$key] = $defaultValue;

    return true;
}