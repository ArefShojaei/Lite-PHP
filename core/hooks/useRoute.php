<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");


/**
 * Add route
 * @function useRoute
 * @param string $method
 * @param string $route
 * @param string $aciton
 * @return void
 */
function useRoute(string $method, string $route, string $action, array $middlewares = []): void {
    # Convert the $method to upper string 
    $method = strtoupper($method);

    useState("routes.{$method}.{$route}", [
        "middlewares" => $middlewares,
        "action" => $action
    ]);
}