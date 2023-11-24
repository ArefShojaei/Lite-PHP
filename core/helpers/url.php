<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * current route
 * @function url
 * @return string
 */
function url(): string {
    return useHTTP("REQUEST_URI");
}

/**
 * current host
 * @function host
 * @return string
 */
function host(): string {
    return useHTTP("HTTP_HOST");
}

/**
 * current protocol
 * @function protocol
 * @return string
 */
function protocol(): string {
    return useHTTP("REQUEST_SCHEME");
}

/**
 * full url as origin to combine "protocol" + "host" + "route"
 * @function protocol
 * @return string
 */
function origin(): string {
    return protocol() . "://" . host() . url();
}

/**
 * build route pointer
 * @function toRoute
 * @param string $route to route
 * @return string
 */
function toRoute(string $route): string {
    return protocol() . "://" . host() . $route;    
}