<?php

/**
 * register alias
 * @function createAlias
 * @param array $aliases
 * @return void
 */
function createAlias(array $aliases): void {
    $GLOBALS['container']['aliases'] = [];
    
    foreach ($aliases as $alias => $path) {
        $GLOBALS['container']['aliases'][$alias] = $path;
    }
}