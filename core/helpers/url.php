<?php

import("@core/hooks/useHTTP");


/**
 * Get base url that includes "protocol & host"
 */
function baseURL(): string {
    return useHTTP("REQUEST_SCHEME") . "://" . useHTTP("HTTP_HOST");
}

/**
 * Get current route
 */
function url(): string {
    return useHTTP("REQUEST_URI");
}

/**
 * Get full url as Origin to combine "Protocol" + "Host" + "Route"
 */
function origin(): string {
    return baseURL() . url();
}

/**
 * build route pointer
 */
function toRoute(string $route): string {
    return baseURL() . $route;    
}