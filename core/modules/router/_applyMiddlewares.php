<?php

function _applyMiddlewares(array $middlewares): void {
    # Go to next middleware as handler
    $next = fn() => true;
    
    # Call middlewares
    foreach ($middlewares as $middleware) {
        $middleware($next);
    }
}