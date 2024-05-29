<?php

/**
 * @package
 */
require_once dirname(__DIR__) . "/core/modules/alias/createAlias.php";


/**
 * Register Alias
 */
createAlias([
    "@core" => dirname(__DIR__) . "/core",
    "@modules" => dirname(__DIR__) . "/modules",
    "@plugins" => dirname(__DIR__) . "/plugins",
    "@hooks" => dirname(__DIR__) . "/hooks",
    "@commands" => dirname(__DIR__) . "/console/commands",
    "@bootstrap" => dirname(__DIR__) . "/bootstrap",
]);