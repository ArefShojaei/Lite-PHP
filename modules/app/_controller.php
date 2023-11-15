<?php

/**
 * @package
 */
import("@core/helpers/view");
import("@core/hooks/useEnum");
import("@core/hooks/useConfig");


/**
 * GET - show home page
 * @function showHome
 * @return void
 */
function showHome(): void {
    view("index", [
        "title" => useConfig("app.name"),
    ]);
}