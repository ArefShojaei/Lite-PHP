<?php

/**
 * @package
 */
import("@core/hooks/useMatch");
import("@core/hooks/useURL");


/**
 * Find route
 * @function _findRoute
 * @private
 * @param array $routes
 * @param string $url
 * @return array
 */
function _findRoute(array $routes, string $url): array {
    foreach ($routes as $route => $params) {
        # Decalre pattern as regex
        $pattern = "/^" . str_replace(["/", "{", "}"], ["\/", "(?<", ">\w+)"], $route) . "$/";
        
        # Get matched route by the pattern
        $matches = useMatch($pattern, useURL($url)['path']);

        # Exit of loop if exists the route
        if(count($matches)) break;
    }

    # Get the route data
    return [
        $matches, 
        $params["middlewares"],
        $params["action"]
    ];
}