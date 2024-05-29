<?php

/**
 * set state
 * @function useState
 * @param string $state
 * @param mixed $value
 * @return void
 */
function useState(string $state, mixed $value): void {
    # get the $state form the container
    $container = &$GLOBALS["container"];

    if (!isset($container) || !is_array($container)) {
        # decalre the $state
        $container = [];
    }

    # add nested keys to the $state
    $keys = explode(".", $state);

    foreach ($keys as $key) {
        if (!isset($container[$key])) {
            $container[$key] = [];
        }

        $container = &$container[$key];
    }

    # define value to the $state
    $container = $value;
}