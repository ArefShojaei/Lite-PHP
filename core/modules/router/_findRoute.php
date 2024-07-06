<?php

import("@core/hooks/useMatch");
import("@core/hooks/useURL");


/**
 * @private
 */
function _findRoute(array $routes, string $url): array {
    foreach ($routes as $route => $params) {
        $pattern = "/^" . str_replace(["/", "{", "}"], ["\/", "(?<", ">\w+)"], $route) . "$/";
        
        $matches = useMatch($pattern, useURL($url)['path']);

        if(count($matches)) break;
    }

    
    # Get the route data
    return [
        $matches, 
        $params["middlewares"],
        $params["action"]
    ];
}