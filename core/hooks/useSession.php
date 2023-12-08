<?php

/**
 * use session
 * @function useSession
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useSession(string $key, mixed $defaultValue = null): mixed {
    # get session
    if(!isset($defaultValue)) {
        return $_SESSION[$key];
    }

    # regenerate session ID
    session_regenerate_id(true);

    # set session
    $_SESSION[$key] = $defaultValue;

    return true;
}