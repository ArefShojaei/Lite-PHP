<?php

/**
 * @package
 */
import("@core/helpers/command");
import("@commands/welcome/_helpers");


/**
 * welcome command
 * 
 * 
 * ----------- comamnds -----------
 ** php cli
 ** php cli welcome
 * --------------------------------
 */
$action = "welcomeCommand";
$description = "welcome message";


addCommand("", $action, $description);

addCommand("welcome", $action, $description);