<?php

import("@core/helpers/view");
import("@core/helpers/abort");
import("@core/hooks/useEnum");
import("@core/hooks/useConfig");


/**
 * GET - show welcome page
 */
function __app__index(): void {
    view("welcome", [
        "title" => useConfig("app.name"),
    ]);
}

/**
 * GET - show 404 page
 */
function __app__404(): void {
    abort(404, "Page Not Found!");
}

/**
 * GET - show 500 page
 */
function __app__500(): void {
    abort(500, "Internal Server Error!");
}