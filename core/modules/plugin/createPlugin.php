<?php

import("@core/hooks/useState");


function createPlugin(string $name, callable $callback, bool $hasUsageMode = true): void {
    # Is runner type
    if(!$hasUsageMode) {
        useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $callback);
        return;
    }
    
    # Is usage type
    useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $callback());
}