<?php

/**
 * @package
 */
import("@core/helpers/addRoute");
import("@modules/app/_config");
import("@modules/app/_controller");


/**
 * app routes
 */
addRoute("GET", "/", "index");
addRoute("GET", "/404", "show404");