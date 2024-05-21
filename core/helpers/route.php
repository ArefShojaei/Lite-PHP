<?php

/**
 * @package
 */
import("@core/hooks/useRoute");


/**
 * add route
 * @function addRoute
 * @param string $method
 * @param string $route
 * @param string $aciton
 * @return void
 */
function addRoute(string $method, string $route, string $action, array $middlewares = []): void {
    useRoute($method, $route, $action, $middlewares);
}