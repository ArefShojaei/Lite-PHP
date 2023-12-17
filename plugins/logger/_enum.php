<?php

/**
 * @package
 */
import("@core/modules/enum/createEnum");


/**
 * Logger Enums
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