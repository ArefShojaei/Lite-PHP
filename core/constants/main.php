<?php

/**
 * import constants
 */
require_once __DIR__ . "/path.php";
require_once __DIR__ . "/extention.php";
require_once __DIR__ . "/flash.php";
require_once __DIR__ . "/include.php";
require_once __DIR__ . "/plugin.php";


/**
 * development mode
 * @constant string
 * @return string
 */
const DEV_MODE = "development";

/**
 * production mode
 * @constant string
 * @return string
 */
const PROD_MODE = "production";

/**
 * main executable filename
 * @constant string
 * @return string
 */
const MAIN_EXECUTABLE_FILE = "main";

/**
 * check to load file | "security" tip
 * @constant string
 * @return string
 */
const IS_ACCESSED_FILE = true;