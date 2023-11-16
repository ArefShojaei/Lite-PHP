<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * get config value
 * @function useConfig
 * @return string $key
 * @return string
 */
function useConfig(string $key): string {
    list($name, $key) = explode(".", $key);

    $configs = useGlobal("configs");

    return $configs[$name][$key];
}