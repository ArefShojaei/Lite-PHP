<?php

/**
 * use plugin by name
 * @function usePlugin
 * @param string $name plugin name
 * @return array
 */
function usePlugin(string $name): array {
    return $GLOBALS["container"]["plugins"]["helper"][$name];
}