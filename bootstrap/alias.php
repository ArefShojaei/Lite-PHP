<?php

/**
 * @package
 */
require_once "core/modules/alias/createAlias.php";


/**
 * init aliases
 */
createAlias([
    "@core" => "core",
    "@modules" => "modules",
    "@plugins" => "plugins",
    "@hooks" => "hooks",
    "@commands" => "console/commands",
    "@bootstrap" => "bootstrap",
]);