<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request client ip
 * @function _ip
 * @private
 * @return string
 */
function _ip(): string {
    return useHTTP("REMOTE_ADDR");
}