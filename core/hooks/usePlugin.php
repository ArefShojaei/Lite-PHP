<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");
import("@core/hooks/useError");


/**
 * Get plugin by name
 * @function usePlugin
 * @param string $name Plugin name
 * @return array
 */
function usePlugin(string $name): array|string {
    # Get plugins
    $plugins = useGlobal("plugins");

    # check to not exist the plugin
    if(!is_array($plugins)) {
        useError("{$name} plugin doesn't exist!");
    }

    # Get the plugin
    return $plugins[PLUGIN_USAGE_TYPE][$name];
}