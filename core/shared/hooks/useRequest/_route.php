<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request url as "route"
 * @function _route
 * @private
 * @return string
 */
function _route(): string {
    return useHTTP("REQUEST_URI");
}