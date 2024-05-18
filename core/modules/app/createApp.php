<?php

/**
 * start session
 */
session_start();


/**
 * init app
 * @function createApp
 * @return void
 */
function createApp(): void {
    require_once "bootstrap/app.php";
}