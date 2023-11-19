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
    $keyboard = "helper";

    if(!$hasUsageMode) {
        $keyboard = "runner";

        useState("plugins", [$keyboard, $name], $action());
        return;
    }
    
    useState("plugins", [$keyboard, $name], $action());
}