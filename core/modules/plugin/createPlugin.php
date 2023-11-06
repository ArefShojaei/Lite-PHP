<?php

/**
 * @desc register plugin
 * @function createPlugin
 * @param {string} $name
 * @param {callback} $action
 * @param {boolean} $hasUsageMode
 * @return {void}
 */
function createPlugin(string $name, callable $action, bool $hasUsageMode = true): void {
    $keyboard = "helper";

    if(!$usageMode) {
        $keyboard = "runner";

        $GLOBALS["container"]["plugins"][$keyboard][$name] = $action();
        exit;
    }
    
    $GLOBALS["container"]["plugins"][$keyboard][$name] = $action();
}