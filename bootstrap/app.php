<?php

/**
 * @package
 */
import("@core/modules/router/createRouter");
import("@core/hooks/useMode");
import("@bootstrap/providers");


/**
 * disable to show errors in "production mode"
 */
if (useMode() !== DEV_MODE) error_reporting(0);


/**
 * set default timezone
 */
date_default_timezone_set("America/New_York");


/**
 * init router
 */
createRouter();