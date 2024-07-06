<?php

import("@modules/database/_config");
import("@core/modules/database/createDatabase");
import("@core/hooks/useConfig");


/**
 * Init database 
 */
createDatabase(
    useConfig("database.host"),
    useConfig("database.username"),
    useConfig("database.password"),
    useConfig("database.db"),
);