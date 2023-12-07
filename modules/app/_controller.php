<?php

/**
 * @package
 */
import("@core/helpers/view");
import("@core/helpers/abort");
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

/**
 * GET - show 404 page
 * @function show404
 * @return void
 */
function show404(): void {
    abort(404, "Page Not Found!");
}