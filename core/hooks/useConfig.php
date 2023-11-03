<?php

/**
 * @desc get config value
 * @function useConfig
 * @return {string} $key - config key
 * @example "app.name"
 * @return {string}
 */
function useConfig(string $key): string {
    list($name, $key) = explode(".", $key);

    return $GLOBALS["container"]["configs"][$name][$key];
}