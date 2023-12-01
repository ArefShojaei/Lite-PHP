<?php

/**
 * @package
 */
import("@core/modules/module/createModule");
import("@core/modules/router/createRouter");


/**
 * register modules
 */
createModule(function() {
    return [
        # list of plugins that has runner type
        "plugins" => [
            registerPlugin("logger"),
            registerPlugin("security"),
            registerPlugin("cors")
        ],
        # list of modules to must be run in main process
        "modules" => [
            registerModule("app"),
            registerModule("database")
        ],
    ];
});

createRouter();