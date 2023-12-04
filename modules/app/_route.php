<?php

/**
 * @package
 */
import("@core/hooks/useRoute");
import("@modules/app/_controller");

/**
 * app routes
 */
useRoute("GET", "/", "index");