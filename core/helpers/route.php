<?php

import("@core/hooks/useRoute");
import("@core/hooks/useGlobal");


function addRoute(string $method, string $route, string $action, array $middlewares = []): void {
    $prefix = useGlobal("route-prefix");

    useRoute($method, $prefix . $route, $action, $middlewares);
}

function groupRoute(string $prefix, callable $action): void {
    useState("route-prefix", $prefix);

    $action();

    # Set empty value to the state
    useState("route-prefix", "");
}