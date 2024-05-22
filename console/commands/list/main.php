<?php

/**
 * @package
 */
import("@core/helpers/command");
import("@commands/list/_helpers");


/**
 * list command
 * 
 * 
 * ----------- comamnds -----------
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
    addCommand("command", "listCommand", "list of Commands");

    addCommand("route", "listRoute", "list of Routes");

    addCommand("alias", "listAlias", "list of Aliases");

    addCommand("env", "listEnv", "list of Enums");

    addCommand("module", "listModule", "list of Modules");

    addCommand("plugin", "listPlugin", "list of Plugins");
});