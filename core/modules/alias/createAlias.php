<?php

require_once dirname(__DIR__, 2) . "/hooks/useState.php";


function createAlias(array $aliases): void {
    if(empty($aliases)) useState("aliases", []);

    # Add alias to the aliases container
    foreach ($aliases as $alias => $path) {
        useState("aliases.{$alias}", $path);
    }
}