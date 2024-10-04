<?php

require_once __DIR__ . "/path.php";
require_once __DIR__ . "/extention.php";
require_once __DIR__ . "/flash.php";
require_once __DIR__ . "/include.php";
require_once __DIR__ . "/plugin.php";
require_once __DIR__ . "/jwt.php";


const DEV_MODE = "development";

const PROD_MODE = "production";

const MAIN_EXECUTABLE_FILE = "main";

const ERROR_REPORTER_INACTIVATION = 0;

/**
 * Security Tip
 */
const IS_ACCESSED_FILE = true;