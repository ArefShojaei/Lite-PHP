<?php

/**
 * int session
 */
session_start();


/**
 * init app
 * @function createApp
 * @param callable $aciton
 * @return void
 */
function createApp(callable $aciton): void {
    # init base files
    require_once "core/constants/index.php";
    require_once "core/helpers/import.php";
    require_once "core/helpers/dd.php";

    # call the $action as callback
    $aciton();

    # init bootstrap processes
    require_once "bootstrap/app.php";
}