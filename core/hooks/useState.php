<?php

/**
 * Set state
 */
function useState(string $state, mixed $value): void {
    $container = &$GLOBALS["container"];

    # Set default value
    if (!isset($container) || !is_array($container)) {
        $container = [];
    }

    
    # Add nested keys to the state
    $keys = explode(".", $state);

    foreach ($keys as $key) {
        if (!isset($container[$key])) {
            $container[$key] = [];
        }

        $container = &$container[$key];
    }

    # Set value to the state
    $container = $value;
}