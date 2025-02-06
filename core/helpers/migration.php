<?php

import("@core/hooks/useQuery");


function column_increment(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} MODIFY COLUMN {$column} INT AUTO_INCREMENT PRIMARY KEY");
}

function column_string(string $table, string $column, int $length = 255): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} varchar($length)");
}

function column_integer(string $table, string $column, int $length): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} int($length)");
}

function column_date(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} date");
}

function column_id(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} ADD PRIMARY KEY ($column)");
}

function column_timestamp(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} timestamp");
}

function column_text(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} ADD COLUMN IF NOT EXISTS {$column} text");
}

function table_dropIfExists(string $table): void {
    useQuery("DROP TABLE IF EXISTS {$table}");
}