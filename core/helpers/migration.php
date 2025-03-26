<?php

import("@core/hooks/useQuery");


/**
 * Migration column options
 */
function column_increment(string $table, string $column): void {
    useQuery("ALTER TABLE ? MODIFY COLUMN ? INT NOT NULL AUTO_INCREMENT PRIMARY KEY", [$table, $column]);
}

function column_string(string $table, string $column, int $length = 255): void {
    useQuery("ALTER TABLE ? ADD COLUMN ? varchar(?)", [$table, $column, $length]);
}

function column_integer(string $table, string $column, int $length = 3): void {
    useQuery("ALTER TABLE ? ADD COLUMN ? int(?)", [$table, $column, $length]);
}

function column_date(string $table, string $column): void {
    useQuery("ALTER TABLE ? ADD COLUMN ? date", [$table, $column]);
}

function column_id(string $table, string $column): void {
    useQuery("ALTER TABLE ? ADD PRIMARY KEY (?)", [$table, $column]);
}

function column_foreignID(string $table, string $column, string $referenceTable, string $referenceColumn): void {
    useQuery("ALTER TABLE ? ADD FOREIGN KEY (?) REFERENCES ? (?)", [$table, $column, $referenceTable, $referenceColumn]);
}

function column_timestamp(string $table, string $column): void {
    useQuery("ALTER TABLE ? ADD COLUMN ? timestamp default current_timestamp", [$table, $column]);
}

function column_text(string $table, string $column): void {
    useQuery("ALTER TABLE ? ADD COLUMN ? text", [$table, $column]);
}

function column_unique(string $table, string $column): void {
    useQuery("ALTER TABLE ? ADD UNIQUE (?)", [$table, $column]);
}

function column_index(string $table, string $name, string $column): void {
    useQuery("CREATE INDEX ? ON ? (?)", [$name, $table, $column]);
}

function column_drop(string $table, string $name): void {
    useQuery("ALTER TABLE ? DROP COLUMN ?", [$table, $name]);
}

function column_dropIndex(string $table, string $name): void {
    useQuery("ALTER TABLE ? DROP INDEX ? ON ?", [$table, $name]);
}


/**
 * Migration table options
 */
function table_dropIfExists(string $table): void {
    useQuery("DROP TABLE IF EXISTS ?", [$table]);
}

function table_drop(string $table): void {
    useQuery("DROP TABLE ?", [$table]);
}

function table_ifEmpty(string $table): void {
    useQuery("TRUNCATE TABLE IF EXISTS ?", [$table]);
}

function table_empty(string $table): void {
    useQuery("TRUNCATE TABLE ?", [$table]);
}