<?php

/**
 * use global variable by key
 * @function useGlobal
 * @param string $key
 * @return string
 */
function useGlobal(string $key): string {
    return $GLOBALS[$key];
}