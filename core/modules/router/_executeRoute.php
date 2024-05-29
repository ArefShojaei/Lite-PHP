<?php

/**
 * Execute route
 * @function _executeRoute
 * @param string $action
 * @return void
 */
function _executeRoute(string $action): void {
    # Show content
    echo $action();

    # Stop processes
    exit;
}