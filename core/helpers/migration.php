<?php

import("@core/hooks/useQuery");


function table_increment(string $table, string $column): void {
    useQuery("ALTER TABLE {$table} MODIFY COLUMN {$column} Integer");
}