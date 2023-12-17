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
    # import plugin
    import("@plugins/{$plugin}/main");

    # get plugins container
    $plugins = useGlobal("plugins");

    # get the plugin as "runner type"
    $action = $plugins[PLUGIN_RUNNER_TYPE][$plugin];
    
    # call the plugin and pass input as $parmas
    $action($params);
}