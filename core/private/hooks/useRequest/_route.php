<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request url as "route"
 * @function _route
 * @private
 * @return string
 */
function _route(): string {
    return useHTTP("REQUEST_URI");
}