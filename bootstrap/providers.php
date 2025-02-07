<?php

import("@core/helpers/register");


return [
    "plugins" => [
        registerPlugin("logger", ["level" => "combined"]), # Log Level:  short | common | combined
        registerPlugin("security"),
        registerPlugin("cors"),
        registerPlugin("localDatabaseCleaner", ["expireTime" => TIME_ONE_HOURE]),
        registerPlugin("csrf"),
    ],
    "modules" => [
        registerModule("database"),
        registerModule("app"),
    ],
];