<?php

/**
 * get & set cookie
 * @function useCookie
 * @param string $key 
 * @param mixed $defaultValue
 * @param array $params cookie options
 * @return mixed
 */
function useCookie(string $key, mixed $defaultValue = null, array $params = []): mixed {
    # get cookie
    if(!isset($defaultValue)) {
        return $_COOKIE[$key];
    }

    # set cookie
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