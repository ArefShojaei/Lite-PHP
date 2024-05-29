<?php

/**
 * @package
 */
import("@core/hooks/useError");
import("@core/helpers/parse");


/**
 * Cache data by file
 * @function useCache
 * @param string $file File path
 * @param mixed $data File data
 * @return mixed
 */
function useCache(string $file, mixed $data = null): mixed {
    # Cache file
    $filePath = BASE_CACHE_PATH . "/{$file}";
    
    # Get cache data
    if(!$data) {
        # check not to exist the cache file 
        !file_exists($filePath) && useError("The \"{$file}\" file doesn't exist!");

        # parse the data
        return parse($filePath);
    }
    
    # Set cache data
    return file_put_contents($filePath, $data);
}