<?php

/**
 * @desc register plugin
 * @function createPlugin
 * @param {string} $name
 * @param {callback} $action
 * @return {void}
 */
function createPlugin(string $name, callable $action): void {
    $GLOBALS["container"]["plugins"][$name] = $action();
}