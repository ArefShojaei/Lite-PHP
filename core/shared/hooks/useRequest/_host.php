<?php

import("@core/hooks/useHTTP");


/**
 * Server host
 */
function _host(): string {
    return useHTTP("HTTP_HOST");
}