<?php

/**
 * @package
 */
require_once dirname(__DIR__, 2) . "/hooks/useState.php";


/**
 * register alias
 * @function createAlias
 * @param array $aliases
 * @return void
 */
function createAlias(array $aliases): void {
    # decalre aliases state if the aliases is empty!
    if(empty($aliases)) useState("aliases", []);

    # add alias to the aliases container
    foreach ($aliases as $alias => $path) {
        useState("aliases.{$alias}", $path);
    }
}