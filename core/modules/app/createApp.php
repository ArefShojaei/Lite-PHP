<?php

/**
 * @desc init app
 * @function createApp
 * @param {callback} $aciton
 * @return {void}
 */
function createApp(callable $aciton): void {
    require_once "core/helpers/import.php";
    require_once "core/helpers/module.php";
    require_once "core/helpers/plugin.php";

    $aciton();

    require_once "bootstrap/app.php";
}