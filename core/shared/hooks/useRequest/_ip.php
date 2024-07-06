<?php

import("@core/hooks/useHTTP");


/**
 * Request client ip
 * @private
 */
function _ip(): string {
    return useHTTP("REMOTE_ADDR");
}