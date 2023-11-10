<?php

/**
 * register route
 * @function useRoute
 * @param string $method
 * @param string $route
 * @param callable $aciton
 * @return void
 */
function useRoute(string $method, string $route, callable $action): void {
    $method = strtoupper($method);

    $GLOBALS["container"]["routes"][$method][$route] = $action;
}