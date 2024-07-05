<?php

/**
 * Session setup
 */
session_start();
session_regenerate_id();


/**
 * Setup app
 * @function createApp
 * @return void
 */
function createApp(): void {
    require_once dirname(__DIR__, 3) . "/bootstrap/app.php";
}