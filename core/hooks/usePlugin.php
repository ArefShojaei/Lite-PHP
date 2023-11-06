<?php

/**
 * @desc get plugin
 * @function usePlugin
 * @param {string} $name - plugin name
 * @return {array}
 */
function usePlugin(string $name): array {
    return $GLOBALS["container"]["plugins"]["helper"][$name];
}