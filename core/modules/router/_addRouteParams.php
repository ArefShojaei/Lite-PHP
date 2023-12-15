<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * add route params
 * @function _addRouteParams
 * @private
 * @param array $matches
 * @return void
 */
function _addRouteParams(array $matches): void {
    # declare array of route params
    $params = [];

    # add route params to $params
    foreach ($matches as $key => $value) {
        if(isset($key) && is_string($key)) $params[$key] = $value;
    }
    
    # add "params" header as request params
    useHTTP("params", $params);
}