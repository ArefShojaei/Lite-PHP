<?php

import("@core/helpers/register");


return [
    "plugins" => [
        registerPlugin("logger", ["level" => "combined"]), # Log Level:  short | common | combined
        registerPlugin("security"),
        registerPlugin("cors")
    ],
    "modules" => [
        registerModule("database"),
        registerModule("app"),
    ],
];