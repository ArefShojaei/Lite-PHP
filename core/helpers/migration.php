<?php

import("@core/hooks/useQuery");


function table_increment(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} MODIFY COLUMN {$column} Integer");
}

function table_string(string $table, string $column, int $length = 255): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} varchar($length)");
}