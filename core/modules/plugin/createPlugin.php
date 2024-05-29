<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * register plugin
 * @function createPlugin
 * @param string $name
 * @param callable $action
 * @param bool $hasUsageMode
 * @return void
 */
function createPlugin(string $name, callable $action, bool $hasUsageMode = true): void {
    # is runner type
    if(!$hasUsageMode) {
        // useState("plugins", [PLUGIN_RUNNER_TYPE, $name], $action);
        useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action);
        return;
    }
    
    # is usage type
    // useState("plugins", [PLUGIN_USAGE_TYPE, $name], $action());
    useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action());
}