<?php

import("@core/helpers/command");
import("@commands/welcome/_helpers");


/**
 * Welcome command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli
 ** php cli welcome
 * --------------------------------
 */
$action = "welcomeCommand";
$description = "Welcome message";


addCommand("", $action, $description);

addCommand("welcome", $action, $description);