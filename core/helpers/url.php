<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * base url that includes "protocol & host"
 * @function baseUrl
 * @return string
 */
function baseUrl(): string {
    return useHTTP("REQUEST_SCHEME") . "://" . useHTTP("HTTP_HOST");
}

/**
 * current route
 * @function url
 * @return string
 */
function url(): string {
    return useHTTP("REQUEST_URI");
}

/**
 * full url as origin to combine "protocol" + "host" + "route"
 * @function protocol
 * @return string
 */
function origin(): string {
    return baseUrl() . url();
}

/**
 * build route pointer
 * @function toRoute
 * @param string $route to route
 * @return string
 */
function toRoute(string $route): string {
    return baseUrl() . $route;    
}