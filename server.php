<?php

/**
 * @package
 */
require_once "core/modules/app/createApp.php";
require_once "core/modules/alias/createAlias.php";


# init app
createApp(function() {
    # register Aliases
    createAlias([
        "@root" => "",
        "@core" => "core",
        "@modules" => "modules",
    ]);
});