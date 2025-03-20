<?php

import("@core/helpers/view");
import("@core/helpers/abort");
import("@core/hooks/useEnum");
import("@core/hooks/useConfig");


/**
 * App namespace handlers
 */
function __app__index(): string {
   return view("welcome", [
      "title" => useConfig("app.name"),
   ]);
}

/**
 * HTTP error pages
 */
function __app_500__index(): string {
   return abort(500, useEnum("HTTP::500"));
}

function __app_429__index(): string {
   return abort(429, useEnum("HTTP::429"));
}

function __app_404__index(): string {
   return abort(404, useEnum("HTTP::404"));
}

function __app_403__index(): string {
   return abort(403, useEnum("HTTP::403"));
}

function __app_401__index(): string {
   return abort(401, useEnum("HTTP::401"));
}

function __app_400__index(): string {
   return abort(400, useEnum("HTTP::400"));
}