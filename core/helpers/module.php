<?php

/**
 * register module
 * @function registerModule
 * @param string $module module name
 * @return void
 */
function registerModule(string $module): void {
    import("@modules/{$module}/" . MAIN_MODULE_FILE);
}