<?php

/**
 * Get & Set cookie
 * @function useCookie
 * @param string $key 
 * @param mixed $defaultValue
 * @param array $params Cookie options
 * @return mixed
 */
function useCookie(string $key = null, mixed $defaultValue = null, array $params = []): mixed {
    # Get all Cookie
    if(!isset($key)) return $_COOKIE;

    # Get Cookie
    if(!isset($defaultValue)) {
        return $_COOKIE[$key];
    }

    # Set Cookie
    setcookie(
        $key, 
        $defaultValue,
        isset($params["expireTime"]) ? time() * $params["expireTime"] : 0,
        isset($params["path"]) ? $params["path"] : "",
        isset($params["domain"]) ? $params["domain"] : "",
        isset($params["secure"]) ? $params["secure"] : false,
        isset($params["httpOnly"]) ? $params["httpOnly"] : false,
    );

    return true;
}