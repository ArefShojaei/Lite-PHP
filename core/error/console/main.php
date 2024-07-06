<?php

require_once __DIR__ . "/_error.php";
require_once __DIR__ . "/_exception.php";



/**
 * Override to set custom Console Error message
 */
set_error_handler('setCustomError');


/**
 * Override to set custom Console Exception message
 */
set_exception_handler('setCustomException');
