<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request client ip
 * @function _ip
 * @private
 * @return string
 */
function _ip(): string {
    return useHTTP("REMOTE_ADDR");
}