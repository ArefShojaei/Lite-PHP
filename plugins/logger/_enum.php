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
    "STORAGE_PATH" => "storage",
    "LOGS_PATH" => "storage/logs",
]);