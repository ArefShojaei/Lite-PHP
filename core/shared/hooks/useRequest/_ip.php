<?php

import("@core/hooks/useHTTP");


/**
 * Request client ip
 */
function _ip(): string {
    return useHTTP("REMOTE_ADDR");
}