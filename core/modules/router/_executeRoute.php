<?php

/**
 * execute route
 * @function _executeRoute
 * @param string $action
 * @return void
 */
function _executeRoute(string $action): void {
    # show content
    echo $action();

    # exit processes
    exit;
}