<?php

/**
 * register alias
 * @function createAlias
 * @param array $aliases
 * @return void
 */
function createAlias(array $aliases): void {
    $aliases = $GLOBALS['container']['aliases'];

    $aliases = [];
    
    foreach ($aliases as $alias => $path) {
        $aliases[$alias] = $path;
    }
}