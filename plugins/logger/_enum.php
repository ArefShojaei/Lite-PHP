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
    "LEVEL" => "INFO",
    "BASE_PATH" => "storage",
    "LOGS_PATH" => "storage/logs",
]);