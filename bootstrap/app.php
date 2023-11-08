<?php

/**
 * @package
 */
import("@core/modules/module/createModule");


# register all modules
createModule(function() {
    # plugins
    registerPlugin("logger");
    
    # modules
    registerModule("app");
});