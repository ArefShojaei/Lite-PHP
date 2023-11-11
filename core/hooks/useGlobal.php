<?php

/**
 * get variable of $GLOBALS["container"]
 * @function useGlobal
 * @param string $name
 * @param string|array $defaultValue
 * @return string|array
 */
function useGlobal(string $name, string|array $defaultValue): string|array {
    $container = $GLOBALS["container"];

    return $defaultValue ? $container[$name] = $defaultValue : $container[$name];
}