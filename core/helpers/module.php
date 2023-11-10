<?php

/**
 * Register new module
 * @param string $module module name
 * @return void
 */
function registerModule(string $module): void {
    import("@modules/{$module}/main");
}