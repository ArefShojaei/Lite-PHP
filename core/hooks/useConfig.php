<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * get config by key from config container
 * @function useConfig
 * @return string $key
 * @return string|null
 */
function useConfig(string $key): ?string {
    list($name, $key) = explode(".", $key);
    
    $configs = useGlobal("configs");

    return $configs[$name][$key] ?? null;
}