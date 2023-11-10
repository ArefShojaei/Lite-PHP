<?php

/**
 * current route
 * @function route
 * @return string
 */
function route(): string {
    return $_SERVER["REQUEST_URI"];
}

/**
 * current host
 * @function host
 * @return string
 */
function host(): string {
    return $_SERVER["HTTP_HOST"];
}

/**
 * current protocol
 * @function protocol
 * @return string
 */
function protocol(): string {
    return $_SERVER["REQUEST_SCHEME"];
}

/**
 * current url
 * @function protocol
 * @return string
 */
function url(): string {
    return protocol() . "://" . host() . route();    
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