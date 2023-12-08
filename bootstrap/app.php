<?php

/**
 * @package
 */
import("@core/helpers/module");
import("@core/helpers/plugin");
import("@core/modules/module/createModule");
import("@core/modules/router/createRouter");
import("@core/hooks/useMode");


/**
 * disable to show errors in "production mode"
 */
if(useMode() !== 'development') error_reporting(0);


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
        # list of modules that must be run in main process
        "modules" => [
            registerModule("app"),
            registerModule("database")
        ],
    ];
});


/**
 * init router system
 */
createRouter();