<?php

/**
 * get config by key from config container
 * @function useConfig
 * @return string $key
 * @return string
 */
function useConfig(string $key): string {
    list($name, $key) = explode(".", $key);
    
    return $GLOBALS["container"]["configs"][$name][$key];
}