<?php

function _loadMigration(string $name): void {
    $path = dirname(__DIR__, 3) . "/migrations/{$name}";

    file_exists($path) && require_once $path;
}

function _loadMigrations(): void {
    $migrations = scandir("migrations");

    # Remove "." & ".." to clean $migrations
    array_shift($migrations);
    array_shift($migrations);   
    

    foreach ($migrations as $migration) {
        _loadMigration($migration);
    }
}