<?php

import("@core/hooks/useType");


/**
 * JSON content
 * @private
 */
function _json(array $value): string {
    useType("application/json");
    
    # Get the value as json
    return json_encode($value);
}