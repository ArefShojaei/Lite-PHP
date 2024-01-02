<?php

/**
 * @package
 */
import("@core/modules/enum/createEnum");


/**
 * shortLink enums
 */
createEnum("ShortLink", [
    "TABLE" => "links",
    "COLUMNS" => ["short", "referer"],
]);