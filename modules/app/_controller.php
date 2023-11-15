<?php

/**
 * @package
 */
import("@core/helpers/view");
import("@core/hooks/useEnum");
import("@core/hooks/useConfig");
import("@modules/app/_enum");


/**
 * GET - show home page
 * @function showHome
 * @return void
 */
function showHome(): void {
    view("index", [
        "title" => useConfig("app.name"),
        "message" => useEnum("App@WELCOME"),
    ]);
}