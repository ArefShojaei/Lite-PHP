<?php

import("@core/hooks/useRoute");
import("@core/hooks/useGlobal");
import("@core/helpers/url");


function addRoute(string $method, string $route, string $action, array $middlewares = []): void {
    $prefix = useGlobal("route-prefix");

    useRoute($method, $prefix . $route, $action, $middlewares);
}

function groupRoute(string $prefix, callable $callback): void {
    useState("route-prefix", $prefix);

    $callback();

    # Set empty value to the state
    useState("route-prefix", "");
}

function addSignedRoute(string $route, string $secretKey, array $params = [], int $expireTime = TIME_ONE_MINUTE): string {
    $currentTimestamp = time();
    
    $expiresAt = $currentTimestamp + ($expireTime * 60);

    $params["expireTime"] = $expiresAt;

    $query = http_build_query($params);

    $signature = hash_hmac("sha256", $query, $secretKey);


    return baseURL() . "{$route}?{$query}&signature={$signature}";
}