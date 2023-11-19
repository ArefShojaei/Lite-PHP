<?php

/**
 * use global variable by key
 * @function useGlobal
 * @param string $key
 * @return string
 */
function useGlobal(string $key): mixed {
    return $GLOBALS[$key];
}