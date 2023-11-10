<?php

/**
 * @package
 */
import("@core/modules/config/createConfig");
import("@core/hooks/useEnv");


/**
 * decalre app configs
 */
createConfig("app", [
    "name" => useEnv("APP_NAME")
]);