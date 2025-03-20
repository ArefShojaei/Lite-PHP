<?php

import("@core/hooks/useMatch");
import("@core/hooks/useURL");


function _findRoute(array $routes, string $url): array {
    foreach ($routes as $route => $params) {
        $pattern = "/^" . str_replace(["/", "{", "}"], ["\/", "(?<", ">\w+)"], $route) . "$/";

        $matches = useMatch($pattern, implode("", useURL($url)));

        if(count($matches)) break;
    }

    # Get the route data
    return [
        $matches, 
        $params["middlewares"],
        $params["action"]
    ];
}