<?php

/**
 * Apply middlewares
 * @function _applyMiddlewares
 * @private
 * @param array $middlewares
 * @return void
 */
function _applyMiddlewares(array $middlewares): void {
    # Run next middleware as function
    $next = fn() => true;
    
    # Call middlewares
    foreach ($middlewares as $middleware) {
        $middleware($next);
    }
}