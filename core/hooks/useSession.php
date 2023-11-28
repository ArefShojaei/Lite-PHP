<?php

/**
 * use session
 * @function useSession
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useSession(string $key, mixed $defaultValue = null): mixed {
    if(!isset($defaultValue)) {
        return $_SESSION[$key];
    }

    session_regenerate_id(true);

    $_SESSION[$key] = $defaultValue;

    return true;
}