<?php

import("@core/helpers/register");


return [
    "plugins" => [
        registerPlugin("security"),
        registerPlugin("csrf"),
        registerPlugin("cors"),
        registerPlugin("logger", ["level" => "short"]), # Log Level:  short | common | combined
        registerPlugin("rateLimiter", ["limit" => 100, "timeFrameInMinutes" => TIME_ONE_HOURE]),
        registerPlugin("localDatabaseCleaner", ["expireTime" => TIME_ONE_HOURE]),
    ],
    "modules" => [
        registerModule("database"),
        registerModule("app"),
    ],
];