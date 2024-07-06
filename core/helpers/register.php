<?php

import("@core/hooks/useGlobal");


function registerPlugin(string $plugin, array $params = []): void {
    global $argc;

    # Check not to run plugin in CLI
    if($argc) return;
    
    import("@plugins/{$plugin}/" . MAIN_EXECUTABLE_FILE);

    $action = useGlobal("plugins." . PLUGIN_RUNNER_TYPE . ".{$plugin}");

    $action($params);
}

function registerModule(string $module): void {
    import("@modules/{$module}/" . MAIN_EXECUTABLE_FILE);
}