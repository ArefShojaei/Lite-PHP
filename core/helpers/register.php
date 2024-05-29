<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * Register plugin
 * @function registerPlugin
 * @param string $plugin Plugin name
 * @param array $params Plugin options
 * @return void
 */
function registerPlugin(string $plugin, array $params = []): void {
    global $argc;

    # Check to not run plugin in CLI
    if($argc) return;
    
    # Load plugin
    import("@plugins/{$plugin}/" . MAIN_EXECUTABLE_FILE);

    # Get the plugin action as "Runner type"
    $action = useGlobal("plugins." . PLUGIN_RUNNER_TYPE . ".{$plugin}");

    # Call the plugin and pass input as $params
    $action($params);
}


/**
 * Register module
 * @function registerModule
 * @param string $module Module name
 * @return void
 */
function registerModule(string $module): void {
    import("@modules/{$module}/" . MAIN_EXECUTABLE_FILE);
}