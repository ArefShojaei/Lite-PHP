<?php

/**
 * @desc register all routes
 * @function createRouter
 * @return {void}
 */
function createRouter() {
    # request url
    $url = $_SERVER["REQUEST_URI"];
    
    # request method
    $method = $_SERVER["REQUEST_METHOD"];

    # get all routes of the request method
    $routes = $GLOBALS["container"]["routes"][$method];
    
    # is 404
    if(!array_key_exists($url, $routes)) {
        echo "404 Page!";
        exit;
    }

    # get current route action
    $action = $routes[$url];

    # call the route action
    echo $action();
}