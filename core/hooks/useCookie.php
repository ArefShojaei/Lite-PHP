<?php

/**
 * use cookie
 * @function useCookie
 * @param string $key 
 * @param mixed $defaultValue
 * @param array $params cookie options
 * @return mixed
 */
function useCookie(string $key, mixed $defaultValue = null, array $params): mixed {
    if(!isset($defaultValue)) {
        return $_COOKIE[$key];
    }

    setcookie(
        $key, 
        $defaultValue,
        time() * $params["expireTime"],
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httpOnly"]
    );

    return true;
}