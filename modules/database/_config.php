<?php

/**
 * @package
 */
import("@core/modules/config/createConfig");
import("@core/hooks/useEnv");


/**
 * declare database configs
 */
createConfig("database", [
    "host" => useEnv("MYSQL_HOST"),
    "db" => useEnv("MYSQL_DB"),
    "username" => useEnv("MYSQL_USERNAME"),
    "password" => useEnv("MYSQL_PASSWORD"),
]);