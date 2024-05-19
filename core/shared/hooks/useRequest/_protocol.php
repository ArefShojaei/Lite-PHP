<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request protocol
 * @function _protocol
 * @private
 * @return string
 */
function _protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}