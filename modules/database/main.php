<?php

/**
 * use modules
 */
import("@modules/database/_config");
import("@core/modules/database/createDatabase");
import("@core/hooks/useConfig");

createDatabase(
    useConfig("database.host"),
    useConfig("database.username"),
    useConfig("database.password"),
    useConfig("database.db"),
);