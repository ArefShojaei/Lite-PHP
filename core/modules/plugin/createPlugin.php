<?php

import("@core/hooks/useState");


function createPlugin(string $name, callable $action, bool $hasUsageMode = true): void {
    # Is runner type
    if(!$hasUsageMode) {
        useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action);
        return;
    }
    
    # Is usage type
    useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action());
}