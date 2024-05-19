<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * server host
 * @function _host
 * @private
 * @return string
 */
function _host(): string {
    return useHTTP("HTTP_HOST");
}