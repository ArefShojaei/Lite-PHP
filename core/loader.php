<?php

/**
 * @package
 * 
 * init base files 
 */
require_once "core/constants/index.php";
require_once "core/helpers/import.php";
require_once "bootstrap/alias.php";
require_once "core/helpers/dd.php";
require_once "core/modules/env/createEnv.php";


/**
 * init Env
 */
createEnv();