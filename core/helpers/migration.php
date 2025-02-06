<?php

import("@core/hooks/useQuery");


function column_increment(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} MODIFY COLUMN {$column} Integer");
}

function column_string(string $table, string $column, int $length = 255): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} varchar($length)");
}

function column_integer(string $table, string $column, int $length): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} int($length)");
}