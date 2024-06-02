<?php

/**
 * @package
 */
import("@core/modules/config/createConfig");
import("@core/hooks/useEnv");


/**
 * App config
 */
createConfig("app", [
    "name" => useEnv("APP_NAME"),
    "locale" => "en",
    "fallback_locale" => "fa"
]);