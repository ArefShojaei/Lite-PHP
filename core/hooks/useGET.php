<?php

/**
 * Get the Request data from $_GET
 */
function useGET(string $key = null): string|array {
    return isset($key) ? $_GET[$key] : $_GET;
}