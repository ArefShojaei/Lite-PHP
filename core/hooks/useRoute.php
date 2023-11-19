<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");


/**
 * register route
 * @function useRoute
 * @param string $method
 * @param string $route
 * @param callable $aciton
 * @return void
 */
function useRoute(string $method, string $route, string $action): void {
    $method = strtoupper($method);

    useState("routes", [$method, $route], $action);
}