<?php

/**
 * register plugin
 * @function registerPlugin
 * @param string $plugin plugin name
 * @return void
 */
function registerPlugin(string $plugin): void {
    import("@plugins/{$plugin}/main");
}