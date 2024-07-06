<?php

import("@core/hooks/useHTTP");


/**
 * Request client user-agent
 * @private
 */
function _userAgent(): string {
    return useHTTP("HTTP_USER_AGENT");
}