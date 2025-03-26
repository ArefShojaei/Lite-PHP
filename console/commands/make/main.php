<?php

import("@core/helpers/command");
import("@commands/make/_helpers");


/**
 * Make command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli make:command [name]
 ** php cli make:module [name]
 ** php cli make:plugin [name]
 ** php cli make:hook [name]
 ** php cli make:view [name]
 ** php cli make:migration [name]
 * --------------------------------
 */
groupCommand("make:", function() {
    addCommand("command {name}", "makeCommand", "Make command by name");
    addCommand("module {name}", "makeModule", "Make module by name");
    addCommand("plugin {name} {type}", "makePlugin", "Make plugin by name & type");
    addCommand("hook {name}", "makeHook", "Make hook by name");
    addCommand("view {name}", "makeView", "Make view by name");
    addCommand("migration {name}", "makeMigration", "Make migration by name");
});