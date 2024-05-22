<?php

/**
 * @package
 */
import("@core/helpers/route");
import("@modules/app/_config");
import("@modules/app/_controller");


/**
 * app routes
 */
addRoute("GET", "/", "index");
addRoute("GET", "/404", "show404");