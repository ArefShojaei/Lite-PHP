<?php

/**
 * get header by name
 * @function useHTTP
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useHTTP(string $key, mixed $defaultValue = null): mixed {
    # get HTTP
    if(!isset($defaultValue)) {
        return $_SERVER[$key];
    }

    # set HTTP
    $_SERVER[$key] = $defaultValue;

    return true;
}