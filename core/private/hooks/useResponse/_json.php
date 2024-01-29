<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * JSON content
 * @function _json
 * @private
 * @param array $value
 * @return string
 */
function _json(array $value): string {
    # set content-type
    useType("application/json");
    
    # reutrn the $value as json
    return json_encode($value);
}