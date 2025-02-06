<?php

import("@core/hooks/useGlobal");
import("@core/hooks/useQuery");
import("@commands/migrate/_shared");


function migrateTables() {
    _loadMigrations();

    $migrations = useGlobal("migrations");

    foreach ($migrations as $table => $actions) {
        $migrationHandler = $actions["up"];

        echo "[INFO] Migrating $table table ..." . PHP_EOL;
        
        useQuery("CREATE TABLE IF NOT EXISTS {$table} ( `id` Integer )");
        
        echo "[INFO] Migration process done." . PHP_EOL;


        call_user_func($migrationHandler, $table);
    }
}