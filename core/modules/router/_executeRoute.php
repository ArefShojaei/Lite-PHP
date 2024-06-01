<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * Execute route
 * @function _executeRoute
 * @param string $action
 * @return void
 */
function _executeRoute(string $action): void {
    # Show content
    echo !useGlobal("route-params") ? $action() : call_user_func($action, ...useGlobal("route-params"));

    # Stop processes
    exit;
}