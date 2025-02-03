<?php

import("@core/hooks/useGlobal");


function _executeRoute(string $action): void {
    echo !useGlobal("route-params") ? $action() : call_user_func($action, ...useGlobal("route-params"));

    # Stop process
    exit;
}