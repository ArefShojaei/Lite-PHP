<?php

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


function createRouter(): void {
    $url = useHTTP("REQUEST_URI");
    
    $method = useHTTP("REQUEST_METHOD");

    $routes = useGlobal("routes.{$method}") ?? useRedirect("/404");

    list($matches, $middlewares, $action) = _findRoute($routes, $url);

    $isMatchedRoute = _isMatchedRoute($matches);


    # Is 404
    if(!$isMatchedRoute) useRedirect("/404");

    if(count($middlewares)) _applyMiddlewares($middlewares);

    if(count($matches) >= 3) _addRouteParams($matches);

    
    _executeRoute($action);
}