<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");
import("@core/hooks/useGlobal");
import("@core/hooks/useHeader");


/**
 * register all routes
 * @function createRouter
 * @return void
 */
function createRouter(): void {
    $params = [];

    # request url
    $url = useHTTP("REQUEST_URI");
    
    # request method
    $method = useHTTP("REQUEST_METHOD");

    # get all routes of the request method
    $routes = useGlobal("routes")[$method] ?? [];

    # get matched route
    foreach ($routes as $route => $action) {
        $pattern = "/^" . str_replace(["/", "{", "}"], ["\/", "(?<", ">\w+)"], $route) . "$/";
        
        preg_match($pattern, $url, $matches);

        if(count($matches)) break;
    }

    # check to exist the matched route
    $isMatchedRoute = isset($matches[0]) ? $matches[0] : false;

    # set route params
    foreach ($matches as $key => $value) {
        if(isset($key) && is_string($key)) $params[$key] = $value;
    }

    # is 404
    if(!$isMatchedRoute) {
        http_response_code(404);
        
        die("404 Page!");
    }

    # add "params" header as request params
    useHeader("params", $params);

    # show content
    echo $action();

    # exit processes
    exit;
}