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
    $plugins = useGlobal("plugins");

    if(!is_array($plugins)) {
        useError("The response is not an Array!");
    }

    return $plugins["helper"][$name];
}