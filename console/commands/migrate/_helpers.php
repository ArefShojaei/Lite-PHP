<?php

import("@core/hooks/useGlobal");
import("@core/hooks/useQuery");
import("@commands/migrate/_shared");


function migrateTables(): void {
    _loadMigrations();

    $migrations = useGlobal("migrations");

    foreach ($migrations as $table => $actions) {
        $migrationHandler = $actions["up"];

        echo "[INFO] Migrating $table table ..." . PHP_EOL;
        
        useQuery('CREATE TABLE IF NOT EXISTS ? ( `id` INT )', [$table]);
        
        echo "[INFO] Migration process done." . PHP_EOL;


        call_user_func($migrationHandler, $table);
    }
}

function resetTables(): void {
    _loadMigrations();

    $migrations = useGlobal("migrations");

    foreach ($migrations as $table => $actions) {
        $migrationHandler = $actions["down"];

        echo "[INFO] Restarting $table table ..." . PHP_EOL;
        
        call_user_func($migrationHandler, $table);

        echo "[INFO] Restarting process done." . PHP_EOL;
    }
}

function refreshTables(): void {
    resetTables();
    
    migrateTables();
}