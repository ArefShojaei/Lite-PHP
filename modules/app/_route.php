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
useRoute("GET", "/404", "show404");