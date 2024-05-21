<?php

/**
 * import constants
 */
require_once "core/constants/path.php";
require_once "core/constants/extention.php";
require_once "core/constants/flash.php";
require_once "core/constants/include.php";
require_once "core/constants/plugin.php";


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
const PROD_MODE = "development";

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