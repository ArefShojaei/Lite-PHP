<?php

require_once __DIR__ . "/_error.php";
require_once __DIR__ . "/_exception.php";



/**
 * Override to set custom Client Error message
 */
set_error_handler('setCustomError');


/**
 * Override to set custom Client Exception message
 */
set_exception_handler('setCustomException');
