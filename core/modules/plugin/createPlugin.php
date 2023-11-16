<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * register plugin
 * @function createPlugin
 * @param string $name
 * @param callable $action
 * @param bool $hasUsageMode
 * @return void
 */
function createPlugin(string $name, callable $action, bool $hasUsageMode = true): void {
    $plugins = useGlobal("plugins");
    
    $keyboard = "helper";

    if(!$hasUsageMode) {
        $keyboard = "runner";

        $plugins[$keyboard][$name] = $action();
        return;
    }
    
    $plugins[$keyboard][$name] = $action();
}