<?php

/**
 * Import constants
 */
require_once __DIR__ . "/path.php";
require_once __DIR__ . "/extention.php";
require_once __DIR__ . "/flash.php";
require_once __DIR__ . "/include.php";
require_once __DIR__ . "/plugin.php";


/**
 * Development mode
 * @constant string
 * @return string
 */
const DEV_MODE = "development";

/**
 * Production mode
 * @constant string
 * @return string
 */
const PROD_MODE = "production";

/**
 * Main executable filename
 * @constant string
 * @return string
 */
const MAIN_EXECUTABLE_FILE = "main";

/**
 * Check to load file => "security" tip
 * @constant string
 * @return string
 */
const IS_ACCESSED_FILE = true;