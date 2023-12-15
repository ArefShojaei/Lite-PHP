<?php

/**
 * register new plugin
 * @function registerPlugin
 * @param string $plugin plugin name
 * @return void
 */
function registerPlugin(string $plugin): void {
    import("@plugins/{$plugin}/main");
}