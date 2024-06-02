<?php

/**
 * Get State from $_GLOBALS super global
 * @function useGlobal
 * @param string $state
 * @return mixed
 */
function useGlobal(string $state = null): mixed {
    # Get container as global
    $container = $GLOBALS["container"];

    # Get container as Global data
    if (!isset($state)) return $GLOBALS["container"];
    
    # Extract state keys
    $keys = explode(".", $state);

    # Dive into nested keys to find the state
    foreach ($keys as $key) {
        if(!isset($container[$key])) {
            return null;
        }

        $container = &$container[$key];
    }

    # Get the state
    return isset($container) ? $container : $GLOBALS[$state];
}