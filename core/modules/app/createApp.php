<?php

/**
 * Setup Session
 */
session_start();


function createApp(): void {
    require_once dirname(__DIR__, 3) . "/bootstrap/app.php";
}