<?php

/**
 * @package
 */
import("@core/helpers/command");
import("@commands/test/_helpers");


/**
 * welcome command
 * 
 * 
 * ----------- comamnds -----------
 ** php cli test
 ** php cli test [module]
 * --------------------------------
 */
addCommand("test", "testAllModules", "test all modules");

addCommand("test {module}", "testModule", "test module by name");