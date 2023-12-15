<?php

/**
 * use state
 * @function useState
 * @param string $container
 * @param array $keys
 * @param mixed $value
 * @return void
 */
function useState(string $state, array $keys, mixed $value): void {
    # get the $state form the container
    $container = &$GLOBALS["container"][$state];

    if (!isset($container) || !is_array($container)) {
        # decalre the $state
        $container = [];
    }

    # add nested keys to the $state
    foreach ($keys as $key) {
        if (!isset($container[$key])) {
            $container[$key] = [];
        }

        $container = &$container[$key];
    }

    # define value to the $state
    $container = $value;
}