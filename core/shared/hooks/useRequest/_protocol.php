<?php

import("@core/hooks/useHTTP");


/**
 * Request protocol
 */
function _protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}