<?php

import("@core/hooks/useHTTP");


/**
 * Request protocol
 * @private
 */
function _protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}