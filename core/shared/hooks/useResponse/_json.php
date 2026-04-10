<?php

import("@core/hooks/useType");


/**
 * JSON content
 */
function _json(array $value): string {
    useType("application/json");
    
    return json_encode($value);
}