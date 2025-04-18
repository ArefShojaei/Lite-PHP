<?php

import("@core/helpers/command");
import("@commands/migrate/_helpers");


/**
 * Migrate command
 * 
 * 
 * ----------- Comamnds -----------
 ** php cli migrate
 ** php cli migrate [table]
 ** php cli migrate:reset
 ** php cli migrate:reset [table]
 ** php cli migrate:refresh
 ** php cli migrate:refresh [table]
 * --------------------------------
 */
addCommand("migrate", "migrateTables", "Migrate tables");
addCommand("migrate {table}", "migrateTableByName", "Migrate table by name");

addCommand("migrate:reset", "resetTables", "Restart tables");
addCommand("migrate:reset {table}", "resetTableByName", "Restart table by name");

addCommand("migrate:refresh", "refreshTables", "Refresh tables");
addCommand("migrate:refresh {table}", "refreshTableByName", "Refresh table by name");