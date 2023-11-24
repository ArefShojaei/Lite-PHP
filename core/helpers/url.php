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
 * full url as origin to combine "protocol" + "host" + "route"
 * @function protocol
 * @return string
 */
function origin(): string {
    return useHTTP("REQUEST_SCHEME") . "://" . useHTTP("HTTP_HOST") . url();
}

/**
 * build route pointer
 * @function toRoute
 * @param string $route to route
 * @return string
 */
function toRoute(string $route): string {
    return useHTTP("REQUEST_SCHEME") . "://" . useHTTP("HTTP_HOST") . $route;    
}