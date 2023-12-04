<?php

/**
 * @package
 */
import("@core/helpers/view");
import("@core/hooks/useEnum");
import("@core/hooks/useConfig");


/**
 * GET - show home page
 * @function index
 * @return void
 */
function index(): void {
    view("welcome", [
        "title" => useConfig("app.name"),
    ]);
}