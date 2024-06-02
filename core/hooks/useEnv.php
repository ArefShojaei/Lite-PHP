<?php

/**
 * Get Variable by key from $_ENV super global
 * @function useEnv
 * @param string $key
 * @return string|int|null|array
 */
function useEnv(string $key = null): string|int|null|array {
    return isset($key) ? $_ENV[$key] : $_ENV;
}