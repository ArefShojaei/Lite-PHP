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
 * router system
 * @function createRouter
 * @return void
 */
function createRouter(): void {
    # request url
    $url = useHTTP("REQUEST_URI");
    
    # request method
    $method = useHTTP("REQUEST_METHOD");

    # get all routes of the request method if is exists aleardy!
    // $routes = useGlobal("routes")[$method] ?? useError("The `{$method}` method is not supported!");
    $routes = useGlobal("routes.{$method}") ?? useError("`{$method}` method is not supported!");

    # get matched route
    list($matches, $middlewares, $action) = _findRoute($routes, $url);

    # check to exist the matched route
    $isMatchedRoute = _isMatchedRoute($matches);

    # is 404
    if(!$isMatchedRoute) useRedirect("/404");

    # apply middlewares if the middleares is exists!
    if(count($middlewares)) _applyMiddlewares($middlewares);

    # add route params
    if(count($matches) >= 3) _addRouteParams($matches);

    # execute the route
    _executeRoute($action);
}