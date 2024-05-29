<?php

/**
 * Set state
 * @function useState
 * @param string $state
 * @param mixed $value
 * @return void
 */
function useState(string $state, mixed $value): void {
    # get container
    $container = &$GLOBALS["container"];

    # Set default value
    if (!isset($container) || !is_array($container)) {
        $container = [];
    }

    # Extract keys from the state
    $keys = explode(".", $state);
    
    # Add nested keys to the state
    foreach ($keys as $key) {
        if (!isset($container[$key])) {
            $container[$key] = [];
        }

        $container = &$container[$key];
    }

    # Set value to the state
    $container = $value;
}