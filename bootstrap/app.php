<?php

import("@core/modules/router/createRouter");
import("@core/hooks/useMode");
import("@bootstrap/providers");
import("@core/view/main");


/**
 * Disable to show errors in "Production mode"
 */
if (useMode() !== DEV_MODE) error_reporting(ERROR_REPORTER_INACTIVATION);


/**
 * Set default timezone
 */
date_default_timezone_set("America/New_York");


/**
 * Init View engine
 */
runViewEngine();


/**
 * Init Router system
 */
createRouter();