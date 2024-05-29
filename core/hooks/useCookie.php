<?php

/**
 * Get & Set cookie
 * @function useCookie
 * @param string $key 
 * @param mixed $defaultValue
 * @param array $params Cookie options
 * @return mixed
 */
function useCookie(string $key, mixed $defaultValue = null, array $params = []): mixed {
    # Get cookie
    if(!isset($defaultValue)) {
        return $_COOKIE[$key];
    }

    # Set cookie
    setcookie(
        $key, 
        $defaultValue,
        time() * $params["expireTime"],
        $params["path"] ?? "",
        $params["domain"] ?? "",
        $params["secure"] ?? false,
        $params["httpOnly"] ?? false
    );

    return true;
}