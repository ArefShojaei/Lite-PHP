<?php

import("@core/helpers/register");


return [
    "plugins" => [
        registerPlugin("security"),
        registerPlugin("csrf"),
        registerPlugin("cors"),
        registerPlugin("logger", ["level" => "combined"]), # Log Level:  short | common | combined
        registerPlugin("rateLimiter", ["limit" => 5, "timeFrame" => 10]),
        registerPlugin("localDatabaseCleaner", ["expireTime" => TIME_ONE_HOURE]),
    ],
    "modules" => [
        registerModule("database"),
        registerModule("app"),
    ],
];