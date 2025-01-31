<?php

import("@core/helpers/command");
import("@commands/list/_helpers");


/**
 * List command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli list
 ** php cli list:command
 ** php cli list:route
 ** php cli list:alias
 ** php cli list:env
 ** php cli list:module
 ** php cli list:plugin
 * --------------------------------
 */
addCommand("list", "listCommand", "list commands");

groupCommand("list:", function() {
    addCommand("command", "listCommand", "List of Commands");

    addCommand("route", "listRoute", "List of Routes");

    addCommand("alias", "listAlias", "List of Aliases");

    addCommand("env", "listEnv", "List of Enums");

    addCommand("module", "listModule", "List of Modules");

    addCommand("plugin", "listPlugin", "List of Plugins");
});