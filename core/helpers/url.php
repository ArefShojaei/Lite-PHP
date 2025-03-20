<?php

import("@core/hooks/useHTTP");
import("@core/hooks/useGlobal");


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

/**
 * Bind route by name
 */
function route(string $name, array $params = []): ?string {
    $route = useGlobal("routes.names.{$name}") ?? false;

    if (!$route) return null;

    if (!count($params)) return $route;

    return preg_replace_callback("/\{(?<key>[\w_-]+)\}/", function($matches) use ($params) {
        $key = $matches["key"];
        
        return $params[$key];
    }, $route);
}