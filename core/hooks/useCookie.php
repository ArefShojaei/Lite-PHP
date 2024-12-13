<?php

/**
 * Get & Set Cookie
 */
function useCookie(string $key = null, mixed $value = null, array $params = []): mixed {
    # Get all Cookie
    if(!isset($key)) return $_COOKIE;

    # Get Cookie
    if(!isset($value)) return $_COOKIE[$key];


    # Set Cookie
    setcookie(
        $key, 
        $value,
        isset($params["expireTime"]) ? time() * $params["expireTime"] : 0,
        isset($params["path"]) ? $params["path"] : "",
        isset($params["domain"]) ? $params["domain"] : "",
        isset($params["secure"]) ? $params["secure"] : false,
        isset($params["httpOnly"]) ? $params["httpOnly"] : false,
    );

    return true;
}