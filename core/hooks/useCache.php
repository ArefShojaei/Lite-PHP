<?php

/**
 * @package
 */
import("@core/hooks/useError");
import("@core/helpers/parse");
import("@core/helpers/build");


/**
 * Cache data by file
 * @function useCache
 * @param string $file File path
 * @param mixed $data File data
 * @return mixed
 */
function useCache(string $file, mixed $data = null): mixed {
    # File info
    $fileInfo = pathinfo($file);
    $filename = $fileInfo["filename"];
    $fileExt = "." . $fileInfo["extension"];
    
    # Target Cache file
    $filePath = buildPath(BASE_CACHE_PATH . "/", $filename, $fileExt);
    
    # Get cache data
    if(!$data) {
        # check not to exist the cache file 
        !file_exists($filePath) && useError("\"{$file}\" file doesn't exist!");

        # parse the data
        return parse($filePath);
    }
    
    # Set cache data
    return file_put_contents($filePath, $data);
}