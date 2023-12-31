<?php

/**
 * @package
 */
require_once "core/hooks/useState.php";


/**
 * register alias
 * @function createAlias
 * @param array $aliases
 * @return void
 */
function createAlias(array $aliases): void {
    # decalre aliases container if the aliases is empty!
    if(empty($aliases)) useState("aliases", [], []);

    # add alias to the aliases container
    foreach ($aliases as $alias => $path) {
        useState("aliases", [$alias], $path);
    }
}