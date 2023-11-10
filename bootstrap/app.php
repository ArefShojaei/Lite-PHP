<?php

/**
 * @package
 */
import("@core/modules/module/createModule");


/**
 * register modules
 */
createModule(function() {
    # plugins
    registerPlugin("logger");
    
    # modules
    registerModule("app");
    registerModule("database");
});