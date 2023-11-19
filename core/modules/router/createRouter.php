<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");
import("@core/hooks/useGlobal");


/**
 * register all routes
 * @function createRouter
 * @return void
 */
function createRouter(): void {
    # request url
    $url = useHTTP("REQUEST_URI");
    
    # request method
    $method = useHTTP("REQUEST_METHOD");

    # get all routes of the request method
    $routes = useGlobal("routes");
    
    $currentRoutes = $routes[$method] ?? [];
    
    # is 404
    if(!array_key_exists($url, $currentRoutes)) {
        echo "404 Page!";
        exit;
    }

    # get current route action
    $action = $currentRoutes[$url];

    # call the route action
    echo $action();
}