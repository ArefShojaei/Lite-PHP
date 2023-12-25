<?php

/**
 * @package
 */
import("@core/hooks/useMatch");
import("@core/hooks/useURL");


/**
 * find route
 * @function _findRoute
 * @private
 * @param array $routes
 * @param string $url
 * @return array
 */
function _findRoute(array $routes, string $url): array {
    foreach ($routes as $route => $params) {
        # decalre pattern as regex
        $pattern = "/^" . str_replace(["/", "{", "}"], ["\/", "(?<", ">\w+)"], $route) . "$/";
        
        # get matched route by the pattern
        $matches = useMatch($pattern, useURL($url)['path']);

        # exit of loop if exists the route
        if(count($matches)) break;
    }

    list($middlewares, $action) = $params;

    # return the route data
    return [$matches, $middlewares,$action];
}