<?php

/**
 * apply middlewares
 * @function _applyMiddlewares
 * @private
 * @param array $middlewares
 * @return void
 */
function _applyMiddlewares(array $middlewares): void {
    # run next middleware as function
    $next = fn() => true;
    
    # call middlewares
    foreach ($middlewares as $middleware) {
        $middleware($next);
    }
}