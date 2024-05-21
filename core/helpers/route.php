<?php

/**
 * @package
 */
import("@core/hooks/useRoute");
import("@core/hooks/useGlobal");


/**
 * add route
 * @function addRoute
 * @param string $method
 * @param string $route
 * @param string $aciton
 * @return void
 */
function addRoute(string $method, string $route, string $action, array $middlewares = []): void {
    $prefix = useGlobal("route-prefix");

    useRoute($method, $prefix . $route, $action, $middlewares);
}


/**
 * group route
 * @function groupRoute
 * @param string $prefix
 * @param callable $aciton
 * @return void
 */
function groupRoute(string $prefix, callable $action): void {
    useState("route-prefix", [], $prefix);

    $action();

    useState("route-prefix", [], "");
}