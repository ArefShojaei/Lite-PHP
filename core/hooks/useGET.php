<?php

/**
 * Get the Request data from $_GET super global
 * @function useGET
 * @param string $key
 * @return string|array
 */
function useGET(string $key = null): string|array {
    return isset($key) ? $_GET[$key] : $_GET;
}