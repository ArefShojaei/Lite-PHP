<?php

import("@core/hooks/useState");


function _addRouteParams(array $matches): void {
    $params = [];

    # Add route params to $params
    foreach ($matches as $key => $value) {
        if(isset($key) && is_string($key)) $params[$key] = $value;
    }
    
    # Set state
    useState("route-params", $params);
}