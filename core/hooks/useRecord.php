<?php

import("@core/helpers/build");


/**
 * Save data in local database
 */
function useRecord(string $table, string $key, string|array|bool $value): void {
    $localDB = &$GLOBALS["container"]["localDB"] ?? [];

    # Hash key
    $index = strlen($key) % 10;

    # Escape input data for string type
    $value = is_string($value) ? htmlspecialchars($value) : $value; 

    # Set data
    $localDB["tables"][$table][$index][$key] = $value;


    $filePath = buildPath(DATABASE_PATH . "/tables/", $table, JSON_FILE_EXTENTION);


    # Apply Data to the DB
    file_put_contents($filePath, json_encode($localDB["tables"][$table]));
}