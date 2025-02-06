<?php

import("@core/helpers/command");
import("@commands/migrate/_helpers");


/**
 * [Description] command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli migrate
 * --------------------------------
 */
addCommand("migrate", "migrateTables", "Migrate tables");