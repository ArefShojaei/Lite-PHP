<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * Add route params
 * @function _addRouteParams
 * @private
 * @param array $matches
 * @return void
 */
function _addRouteParams(array $matches): void {
    # Declare array of route params
    $params = [];

    # Add route params to $params
    foreach ($matches as $key => $value) {
        if(isset($key) && is_string($key)) $params[$key] = $value;
    }
    
    # Add route params as state
    useState("route-params", $params);
}