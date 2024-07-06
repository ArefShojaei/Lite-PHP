<?php

/**
 * Get the Request data from $_POST
 */
function usePOST(string $key = null): string|array {
    return isset($key) ? $_POST[$key] : $_POST;
}