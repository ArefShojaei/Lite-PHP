<?php

# Load Client Debugger
global $argv;

if(!isset($argv)) {
    require_once __DIR__ . "/client/main.php";
    
    return;
}


# Load Console Debugger
require_once __DIR__ . "/console/main.php";