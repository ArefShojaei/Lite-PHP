<?php

/**
 * Get Variable by key from $_ENV
 */
function useEnv(string $key = null): string|int|null|array {
    return isset($key) ? $_ENV[$key] : $_ENV;
}