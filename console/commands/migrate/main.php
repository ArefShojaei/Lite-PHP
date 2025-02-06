<?php

import("@core/helpers/command");
import("@commands/migrate/_helpers");


/**
 * [Description] command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli migrate
 ** php cli migrate:reset
 * --------------------------------
 */
addCommand("migrate", "migrateTables", "Migrate tables");
addCommand("migrate:reset", "resetTables", "Restart tables");