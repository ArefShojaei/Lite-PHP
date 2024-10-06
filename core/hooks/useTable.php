<?php

import("@core/helpers/build");


/**
 * Get data form local database by key
 */
function useTable(string $name, string $key, string $action = TABLE_GET_ACTION): string|array|bool {
    $filePath = buildPath(DATABASE_PATH . "/tables/", $name, JSON_FILE_EXTENTION);
    
    $data = file_exists($filePath) && json_decode(file_get_contents($filePath), true);
    
    $index = strlen($key) % 10;


    # Delete the data
    if ($action === TABLE_DELETE_ACTION) {
        if (!array_key_exists($key, $data[$index])) return false;
        
        unset($data[$index][$key]);

        file_put_contents($filePath, json_encode($data));

        return true;
    }

    # Get the data
    $result = $data[$index][$key] ?? false;

    return is_string($result) ? htmlspecialchars($result) : $result;
}