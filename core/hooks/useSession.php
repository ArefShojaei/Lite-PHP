<?php

/**
 * Get & Set session
 * @function useSession
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useSession(string $key, mixed $defaultValue = null): mixed {
    # Get session
    if(!isset($defaultValue)) {
        return $_SESSION[$key];
    }

    # Regenerate session ID
    session_regenerate_id(true);

    # Set session
    $_SESSION[$key] = $defaultValue;

    return true;
}