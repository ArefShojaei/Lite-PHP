<?php

/**
 * @package
 */
import("@core/modules/enum/createEnum");


/**
 * logger enums
 */
createEnum("Logger", [
    "NAME" => "app",
    "LEVELS" => [
        "short" => "SHORT",
        "common" => "COMMON",
        "combined" => "COMBINED",
    ],
    "STORAGE_PATH" => "storage",
    "LOGS_PATH" => "storage/logs",
]);