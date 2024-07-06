<?php

import("@core/hooks/useError");
import("@core/helpers/parse");
import("@core/helpers/build");


/**
 * Cache data by file
 */
function useCache(string $file, mixed $data = null): mixed {
    $fileInfo = pathinfo($file);
    $filename = $fileInfo["filename"];
    $fileExt = "." . $fileInfo["extension"];
    
    $filePath = buildPath(CACHE_PATH . "/", $filename, $fileExt);
    
    # Get cache data
    if(!$data) {
        !file_exists($filePath) && useError("\"{$file}\" file doesn't exist!");

        return parse($filePath);
    }
    
    # Set cache data
    return file_put_contents($filePath, $data);
}