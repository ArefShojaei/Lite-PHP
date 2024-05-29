<?php

/**
 * @package
 */
import("@core/modules/enum/createEnum");


/**
 * ShortLink enums
 */
createEnum("ShortLink", [
    "TABLE" => "links",
    "COLUMNS" => ["short", "referer"],
]);