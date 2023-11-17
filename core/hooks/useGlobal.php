<?php

/**
 * use global variable by key
 * @function useGlobal
 * @param string $key
 * @return string|null
 */
function useGlobal(string $key): ?string {
    return $GLOBALS[$key] ?? null;
}