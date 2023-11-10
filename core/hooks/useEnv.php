<?php

/**
 * @desc get env by key
 * @function useEnv
 * @param {string} $key
 * @return {string|null}
 */
function useEnv(string $key): string|null {
    return $_ENV[$key] ?? null;
}