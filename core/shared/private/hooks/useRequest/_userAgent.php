<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request client user-agent
 * @function _userAgent
 * @private
 * @return string
 */
function _userAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}