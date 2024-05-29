<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Server host
 * @function _host
 * @private
 * @return string
 */
function _host(): string {
    return useHTTP("HTTP_HOST");
}