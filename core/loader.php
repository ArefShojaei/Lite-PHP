<?php

/**
 * Init base files
 */
require_once __DIR__ . "/constants/main.php";
require_once __DIR__ . "/helpers/import.php";
require_once __DIR__ . "/helpers/dd.php";
require_once __DIR__ . "/modules/env/createEnv.php";
require_once dirname(__DIR__) . "/bootstrap/alias.php";
require_once dirname(__DIR__) . "/bootstrap/autoload.php";


/**
 * Init base modules
 */
createEnv();