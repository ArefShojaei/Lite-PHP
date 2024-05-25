<?php

/**
 * @package
 */
import("@core/helpers/command");
import("@commands/make/_helpers");


/**
 * make command
 * 
 * 
 * ----------- comamnds -----------
 ** php cli make:command [name]
 ** php cli make:module [name]
 ** php cli make:plugin [name]
 ** php cli make:hook [name]
 ** php cli make:view [name]
 * --------------------------------
 */
groupCommand("make:", function() {
    addCommand("command {name}", "makeCommand", "make command by name");
    addCommand("module {name}", "makeModule", "make module by name");
    addCommand("plugin {name} {type}", "makePlugin", "make plugin by name & type");
    addCommand("hook {name}", "makeHook", "make hook by name");
    addCommand("view {name}", "makeView", "make view by name");
});