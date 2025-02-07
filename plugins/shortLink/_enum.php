<?php

import("@core/modules/enum/createEnum");


createEnum("ShortLink", [
    "TABLE" => "links",
    "COLUMNS" => ["short", "reference"],
]);