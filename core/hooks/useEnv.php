<?php

/**
 * get variable by key from env container
 * @function useEnv
 * @param string} $key
 * @return string|null
 */
function useEnv(string $key): ?string {
    return $_ENV[$key] ?? null;
}