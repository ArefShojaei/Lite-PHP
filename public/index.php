<?php

/**
 * @package
 */
require_once "core/modules/app/createApp.php";
require_once "core/modules/alias/createAlias.php";
require_once "core/modules/env/createEnv.php";


/**
 * bootstrap app
 */
createApp(function() {
    # int aliases
    createAlias([
        "@core" => "core",
        "@modules" => "modules",
        "@plugins" => "plugins",
        "@hooks" => "hooks",
    ]);

    # init env
    createEnv();
});