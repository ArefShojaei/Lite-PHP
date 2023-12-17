<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");
import("@core/hooks/useError");


/**
 * use plugin by name
 * @function usePlugin
 * @param string $name plugin name
 * @return array
 */
function usePlugin(string $name): array|string {
    # get plugin from container
    $plugins = useGlobal("plugins");

    # check to not exist the plugin
    if(!is_array($plugins)) {
        useError("The plugin is not eixsts!");
    }

    # return the plugin
    return $plugins["helper"][$name];
}