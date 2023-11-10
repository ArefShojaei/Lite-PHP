<?php

/**
 * @package
 */
require_once "core/modules/app/createApp.php";
require_once "core/modules/alias/createAlias.php";
require_once "core/modules/env/createEnv.php";


/**
 * init app
 */
createApp(function() {
    # register Aliases
    createAlias([
        "@root" => "",
        "@core" => "core",
        "@modules" => "modules",
        "@plugins" => "plugins",
        "@hooks" => "hooks",
    ]);

    # init Env
    createEnv();
});