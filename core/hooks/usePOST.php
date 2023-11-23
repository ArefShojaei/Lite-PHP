<?php

/**
 * use post data in $_POST super global
 * @function usePOST
 * @param string $key
 * @return string|array
 */
function usePOST(string $key = null): string|array {
    return isset($key) ? $_POST[$key] : $_POST;
}