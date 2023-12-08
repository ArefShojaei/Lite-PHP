<?php

/**
 * get variable by key from env container
 * @function useEnv
 * @param string $key
 * @return string|array|null
 */
function useEnv(string $key): string|array|null {
    return isset($key) ? ($_ENV[$key] ?? null) : $_ENV;
}