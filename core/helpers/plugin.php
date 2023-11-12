<?php

/**
 * Register new plugin
 * @param string $plugin plugin name
 * @return void
 */
function registerPlugin(string $plugin): void {
    import("@plugins/{$plugin}/{$plugin}");
}