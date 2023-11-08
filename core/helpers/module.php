<?php

/**
 * @desc register new module
 * @param {string} $module - module name
 * @return {void}
 */
function regsiterModule(string $module): void {
    import("@modules/{$module}/main");
}