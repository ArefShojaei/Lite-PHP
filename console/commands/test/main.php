<?php

import("@core/helpers/command");
import("@commands/test/_helpers");


/**
 * Test command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli test
 ** php cli test [module]
 * --------------------------------
 */
addCommand("test", "testAllModules", "test all modules");

addCommand("test {module}", "testModule", "test module by name");