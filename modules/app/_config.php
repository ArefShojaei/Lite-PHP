<?php

/**
 * @package
 */
import("@core/modules/config/createConfig");
import("@core/hooks/useEnv");


/**
 * app config
 */
createConfig("app", [
    "name" => useEnv("APP_NAME"),
    "timezone" => useEnv("TIMEZONE"),
    "locale" => EN_LOCALE,
    "fallback_locale" => FA_LOCALE
]);