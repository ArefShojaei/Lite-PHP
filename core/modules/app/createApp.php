<?php

/**
 * init app
 * @function createApp
 * @param callable $aciton
 * @return void
 */
function createApp(callable $aciton): void {
    require_once "core/helpers/import.php";
    require_once "core/helpers/module.php";
    require_once "core/helpers/plugin.php";
    require_once "core/helpers/assets.php";
    require_once "core/helpers/dd.php";

    $aciton();

    require_once "bootstrap/app.php";
}