<?php

import("@core/hooks/useHTTP");


/**
 * Request method
 */
function _method(): string {
    return useHTTP("REQUEST_METHOD");
}