<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request client user-agent
 * @function _userAgent
 * @private
 * @return string
 */
function _userAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}