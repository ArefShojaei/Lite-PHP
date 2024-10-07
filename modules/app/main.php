<?php

import("@core/helpers/route");
import("@modules/app/_config");
import("@modules/app/_controller");


/**
 * Routes
 */
addRoute("GET", "/", "__app__index");
addRoute("GET", "/404", "__app__404");
addRoute("GET", "/500", "__app__500");