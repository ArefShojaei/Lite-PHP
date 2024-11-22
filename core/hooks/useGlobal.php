<?php

/**
 * Get State from $_GLOBALS
 */
function useGlobal(string $state = null): mixed {
    $container = $GLOBALS["container"];

    if (!isset($state)) return $container;
    

    
    # Set nested keys
    $keys = explode(".", $state);

    foreach ($keys as $key) {
        if(!isset($container[$key])) {
            return null;
        }

        $container = &$container[$key];
    }
    
    # Get the state
    return isset($container) ? $container : $GLOBALS[$state];
}