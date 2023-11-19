<?php

/**
 * use state
 * @param string $container
 * @param array $keys
 * @param string|int|bool|array|null $value
 * @return void
 */
function useState(string $state, array $keys, string|int|bool|array|null $value): void {
    $container = &$GLOBALS["container"][$state];

    if (!isset($container) || !is_array($container)) {
        $container = [];
    }

    foreach ($keys as $key) {
        if (!isset($container[$key])) {
            $container[$key] = [];
        }

        $container = &$container[$key];
    }

    $container = $value;
}