<?php

import("@core/hooks/useState");
import("@core/hooks/useGlobal");


/**
 * Add route
 */
function useRoute(string $method, string $route, string $action, array $middlewares, ?string $name): void {
    $method = strtoupper($method);

    useState("routes.{$method}.{$route}", [
        "middlewares" => $middlewares,
        "action" => $action
    ]);

    if(is_string($name) && isset($name) && strlen($name)) useState("routes.names.{$name}", $route);
}