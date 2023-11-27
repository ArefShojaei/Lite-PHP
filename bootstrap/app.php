<?php

/**
 * @package
 */
import("@core/modules/module/createModule");
import("@core/modules/router/createRouter");


/**
 * register modules
 */
createModule(function() {
    # plugins
    registerPlugin("logger");
    registerPlugin("security");
    registerPlugin("cors");
    
    # modules
    registerModule("app");
    registerModule("database");
});

createRouter();