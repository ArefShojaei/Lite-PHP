<?php

/**
 * use global variable by key
 * @function useGlobal
 * @param string $key
 * @return mixed
 */
function useGlobal(string $key): mixed {
    $container = &$GLOBALS["container"][$key];
    $default = &$GLOBALS[$key];

    return isset($container) ? $container : $default;
}