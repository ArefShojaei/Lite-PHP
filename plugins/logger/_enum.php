<?php

import("@core/modules/enum/createEnum");


createEnum("Logger", [
    "NAME" => "app",
    "LEVELS" => [
        "short" => "SHORT",
        "common" => "COMMON",
        "combined" => "COMBINED",
    ],
    "DEFAULT_LEVEL" => "SHORT",
    "EXPIRE_TIME_FOR_24H" => 60 * 60 * 24
]);