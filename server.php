<?php declare(strict_types=1);

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
        "@core" => "core",
        "@modules" => "modules",
        "@plugins" => "plugins",
        "@hooks" => "hooks",
    ]);

    # init Env
    createEnv();
});