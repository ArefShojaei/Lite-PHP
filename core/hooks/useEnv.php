<?php

/**
 * @desc get env by key
 * @function useEnv
 * @param {string} $key
 * @return {string}
 */
function useEnv(string $key): string {
    return $_ENV[$key];
}