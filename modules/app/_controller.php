<?php

/**
 * @package
 */
import("@core/helpers/view");
import("@core/hooks/useEnum");
import("@modules/app/_enum");


/**
 * GET - show home page
 * @function showHome
 * @return void
 */
function showHome(): void {
    view("index", [
        "title" => useEnum("App@NAME"),
        "message" => useEnum("App@WELCOME"),
    ]);
}