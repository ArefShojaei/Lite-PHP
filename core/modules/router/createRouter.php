<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");
import("@core/hooks/useGlobal");
import("@core/hooks/useRedirect");
import("@core/hooks/useError");
import("@core/modules/router/_findRoute");
import("@core/modules/router/_isMatchedRoute");
import("@core/modules/router/_addRouteParams");
import("@core/modules/router/_executeRoute");
import("@core/modules/router/_executeRoute");
import("@core/modules/router/_applyMiddlewares");


/**
 * Router system
 * @function createRouter
 * @return void
 */
function createRouter(): void {
    # Request url
    $url = useHTTP("REQUEST_URI");
    
    # Request method
    $method = useHTTP("REQUEST_METHOD");

    # Get all routes of the request method if is aleardy exists!
    $routes = useGlobal("routes.{$method}") ?? useError("`{$method}` method is not supported!");

    # Get matched route
    list($matches, $middlewares, $action) = _findRoute($routes, $url);

    # Check to exist the matched route
    $isMatchedRoute = _isMatchedRoute($matches);

    # Is 404
    if(!$isMatchedRoute) useRedirect("/404");

    # Apply middlewares if the middleares is exists!
    if(count($middlewares)) _applyMiddlewares($middlewares);

    # Add route params
    if(count($matches) >= 3) _addRouteParams($matches);

    # Execute the route
    _executeRoute($action);
}