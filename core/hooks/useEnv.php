<?php

/**
 * Get Variable by key from $_ENV super global
 * @function useEnv
 * @param string $key
 * @return string|array|null
 */
function useEnv(string $key): string|array|null {
    return isset($key) ? ($_ENV[$key] ?? null) : $_ENV;
}