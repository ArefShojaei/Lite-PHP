<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * register plugin
 * @function registerPlugin
 * @param string $plugin plugin name
 * @param array $params plugin options
 * @return void
 */
function registerPlugin(string $plugin, array $params = []): void {
    global $argc;

    # check to not run plugin in CLI
    if($argc) return;
    
    # import plugin
    import("@plugins/{$plugin}/" . MAIN_EXECUTABLE_FILE);

    # get plugins container
    $plugins = useGlobal("plugins");

    # get the plugin as "runner type"
    $action = $plugins[PLUGIN_RUNNER_TYPE][$plugin];
    
    # call the plugin and pass input as $params
    $action($params);
}


/**
 * register module
 * @function registerModule
 * @param string $module module name
 * @return void
 */
function registerModule(string $module): void {
    import("@modules/{$module}/" . MAIN_EXECUTABLE_FILE);
}