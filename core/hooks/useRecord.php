<?php

import("@core/helpers/build");
import("@core/helpers/parse");


/**
 * Save data in local database
 */
function useRecord(string $table, string $key, string|array|bool $value): void {
    $filePath = buildPath(DATABASE_PATH . "/tables/", $table, JSON_FILE_EXTENTION);
    
    if (!file_exists($filePath)) file_put_contents($filePath, "");

    $data = json_decode(parse($filePath), true) ?? [];

    $hash = strlen($key) % 10;

    $data[$hash] = [$key => $value];

    file_put_contents($filePath, json_encode($data));
}