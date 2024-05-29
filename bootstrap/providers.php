<?php

/**
 * @package
 */
import("@core/helpers/register");


/**
 * Register Providers
 */
return [
    "plugins" => [
        registerPlugin("logger", ["level" => "short"]),
        registerPlugin("security"),
        registerPlugin("cors")
    ],
    "modules" => [
        registerModule("database"),
        registerModule("app")
    ],
];