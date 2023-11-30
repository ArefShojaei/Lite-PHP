<?php

/**
 * get header by name
 * @function useHTTP
 * @param string $key
 * @param mixed $defaultValue
 * @return mixed
 */
function useHTTP(string $key, mixed $defaultValue): mixed {
    if(!isset($defaultValue)) {
        return $_SERVER[$key];
    }

    $_SERVER[$key] = $defaultValue;

    return true;
}