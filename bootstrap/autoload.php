<?php

/**
 * Load Autoloader file
 */
$autoload = dirname(__DIR__) . "/vendor/autoload.php";

return file_exists($autoload) && $autoload;