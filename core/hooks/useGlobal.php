<?php

/**
 * get variable from $_GLOBALS
 * @function useGlobal
 * @param string $state
 * @return mixed
 */
function useGlobal(string $state): mixed {
    # get the $state from container as global data
    $container = &$GLOBALS["container"][$state];

    # get the $state from $_GLOBALS if the $state is not exists in the $GLOBALS["container"] 
    $default = &$GLOBALS[$state];

    # return the $state
    return isset($container) ? $container : $default;
}