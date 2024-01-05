<?php

/**
 * @package
 */
import("@core/helpers/module");
import("@core/helpers/plugin");
import("@core/modules/module/createModule");
import("@core/modules/router/createRouter");
import("@core/hooks/useMode");
import("@core/hooks/useEnv");



/**
 * disable to show errors in "production mode"
 */
if (useMode() !== "development") error_reporting(0);


/**
 * set default timezone for date
 */
date_default_timezone_set(useEnv("APP_TIMEZONE"));


/**
 * init modules
 */
createModule(function () {
    return [
        # list of plugins that has runner type
        "plugins" => [
            registerPlugin("logger", ["level" => "short"]),
            registerPlugin("security"),
            registerPlugin("cors")
        ],
        # list of modules that must be run in main process
        "modules" => [
            registerModule("database"),
            registerModule("app")
        ],
    ];
});


/**
 * init router system
 */
createRouter();
