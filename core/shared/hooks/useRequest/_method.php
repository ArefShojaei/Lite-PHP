<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request method
 * @function _method
 * @private
 * @return string
 */
function _method(): string {
    return useHTTP("REQUEST_METHOD");
}