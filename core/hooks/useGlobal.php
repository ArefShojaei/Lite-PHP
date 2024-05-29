<?php

/**
 * get state from $_GLOBALS super global
 * @function useGlobal
 * @param string $state
 * @return mixed
 */
function useGlobal(string $state): mixed {
    # get container as global
    $container = $GLOBALS["container"];

    # extract state keys
    $keys = explode(".", $state);

    # dive into nested keys
    foreach ($keys as $key) {
        if(!isset($container[$key])) {
            return null;
        }

        $state = &$container[$key];
    }

    # return the state
    return isset($state) ? $state : $GLOBALS[$state];
}