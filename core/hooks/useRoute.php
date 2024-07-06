<?php

import("@core/hooks/useState");
import("@core/hooks/useGlobal");


/**
 * Add route
 */
function useRoute(string $method, string $route, string $action, array $middlewares = []): void {
    $method = strtoupper($method);

    useState("routes.{$method}.{$route}", [
        "middlewares" => $middlewares,
        "action" => $action
    ]);
}