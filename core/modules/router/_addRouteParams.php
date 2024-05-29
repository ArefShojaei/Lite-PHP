<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


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
    
    # Add "params" header as request params
    useHTTP("params", $params);
}