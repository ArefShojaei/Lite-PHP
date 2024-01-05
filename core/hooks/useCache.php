<?php

/**
 * @package
 */
import("@core/hooks/useError");
import("@core/helpers/parse");


/**
 * cache file
 * @function useCache
 * @param string $file file path
 * @param mixed $data file data
 * @return mixed
 */
function useCache(string $file, mixed $data = null): mixed {
    # cache file
    $filePath = BASE_CACHE_PATH . "/{$file}";
    
    # get cache data
    if(!$data) {
        # check not to exist the cache file 
        !file_exists($filePath) && useError("The \"{$file}\" file doesn't exist!");

        # parse the data
        return parse($filePath);
    }
    
    # set cache data
    return file_put_contents($filePath, $data);
}