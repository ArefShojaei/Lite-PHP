<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * Register plugin
 * @function createPlugin
 * @param string $name
 * @param callable $action
 * @param bool $hasUsageMode
 * @return void
 */
function createPlugin(string $name, callable $action, bool $hasUsageMode = true): void {
    # Is runner type
    if(!$hasUsageMode) {
        useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action);
        return;
    }
    
    # Is usage type
    useState("plugins." . PLUGIN_RUNNER_TYPE . ".{$name}", $action());
}