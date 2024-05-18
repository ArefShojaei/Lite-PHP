<?php

/**
 * @package
 */
import("@core/modules/router/createRouter");
import("@core/hooks/useMode");
import("@core/hooks/useEnv");
import("@bootstrap/providers");


/**
 * disable to show errors in "production mode"
 */
if (useMode() !== DEV_MODE) error_reporting(0);


/**
 * set default timezone
 */
date_default_timezone_set(useEnv("APP_TIMEZONE"));


/**
 * init router
 */
createRouter();