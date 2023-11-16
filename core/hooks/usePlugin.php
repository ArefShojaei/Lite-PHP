<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");

/**
 * get plugin
 * @function usePlugin
 * @param string $name plugin name
 * @return array
 */
function usePlugin(string $name): array {
    $plugins = useGlobal("plugins");

    return $plugins["helper"][$name];
}