<?php

import("@core/hooks/useHTTP");


/**
 * Server host
 * @private
 */
function _host(): string {
    return useHTTP("HTTP_HOST");
}