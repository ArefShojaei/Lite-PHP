<?php

/**
 * use get data in $_GET super global
 * @function useGet
 * @param string $key
 * @return string|array
 */
function usePost(string $key = null): string|array {
    return isset($key) ? $_GET[$key] : $_GET;
}