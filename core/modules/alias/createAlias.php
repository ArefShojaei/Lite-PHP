<?php

/**
 * register alias
 * @function createAlias
 * @param array $aliases
 * @return void
 */
function createAlias(array $aliases): void {
    # decalre aliases container
    $GLOBALS['container']['aliases'] = [];
    
    # add alias to the aliases container
    foreach ($aliases as $alias => $path) {
        $GLOBALS['container']['aliases'][$alias] = $path;
    }
}