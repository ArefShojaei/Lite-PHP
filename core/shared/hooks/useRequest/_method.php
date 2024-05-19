<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request method
 * @function _method
 * @private
 * @return string
 */
function _method(): string {
    return useHTTP("REQUEST_METHOD");
}