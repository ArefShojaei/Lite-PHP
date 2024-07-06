<?php

/**
 * Get & Set session
 * @function useSession
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useSession(string $key = null, mixed $defaultValue = null): mixed {
    # Get all Sessions
    if(!isset($key)) return $_SESSION; 
    
    # Get Session by key 
    if(!isset($defaultValue)) {
        return $_SESSION[$key];
    }


    # Set session
    $_SESSION[$key] = $defaultValue;

    return true;
}