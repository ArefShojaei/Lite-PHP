<?php

/**
 * Get State from $_GLOBALS super global
 * @function useGlobal
 * @param string $state
 * @return mixed
 */
function useGlobal(string $state): mixed {
    # Get container as global
    $container = $GLOBALS["container"];

    # Extract state keys
    $keys = explode(".", $state);

    # Dive into nested keys to find the state
    foreach ($keys as $key) {
        if(!isset($container[$key])) {
            return null;
        }

        $state = &$container[$key];
    }

    # Get the state
    return isset($state) ? $state : $GLOBALS[$state];
}