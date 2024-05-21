<?php

/**
 * @package
 */
import("@core/helpers/register");


/**
 * init providers
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