<?php

/**
 * @package
 */
import("@core/modules/module/createModule");


# register all modules
createModule(function() {
    registerModule("app");
});