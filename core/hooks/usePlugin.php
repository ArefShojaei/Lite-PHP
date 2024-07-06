<?php

import("@core/hooks/useGlobal");
import("@core/hooks/useError");


/**
 * Get plugin by name
 */
function usePlugin(string $name): array|string {
    $plugins = useGlobal("plugins");

    if(!is_array($plugins)) useError("{$name} plugin doesn't exist!");

    # Get the plugin
    return $plugins[PLUGIN_USAGE_TYPE][$name];
}