<?php

import("@core/helpers/route");
import("@modules/app/_config");
import("@modules/app/_enum");
import("@modules/app/_controller");


/**
 * App routes
 */
addRoute("GET", "/", "__app__index");
addRoute("GET", "/500", "__app_500__index");
addRoute("GET", "/429", "__app_429__index");
addRoute("GET", "/404", "__app_404__index");
addRoute("GET", "/403", "__app_403__index");
addRoute("GET", "/401", "__app_401__index");
addRoute("GET", "/400", "__app_400__index");