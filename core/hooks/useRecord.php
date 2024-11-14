<?php

import("@core/helpers/build");


/**
 * Save data in local database
 */
function useRecord(string $table, string $key, string|array|bool $value): void {
    $filePath = buildPath(DATABASE_PATH . "/tables/", $table, JSON_FILE_EXTENTION);
    
    $data = json_decode(file_get_contents($filePath), true) ?? [];

    # Hash key to find data like Hash table data structure
    $index = strlen($key) % 10;

    # Add data
    $data[$index][] = [$key => $value];

    # Save data
    file_put_contents($filePath, json_encode($data));
}