<?php

import("@core/hooks/useHTTP");


/**
 * Request method
 * @private
 */
function _method(): string {
    return useHTTP("REQUEST_METHOD");
}