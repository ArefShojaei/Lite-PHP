<?php

import("@core/hooks/useHTTP");


/**
 * Request url as "route"
 * @private
 */
function _route(): string {
    return useHTTP("REQUEST_URI");
}