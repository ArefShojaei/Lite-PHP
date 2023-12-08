<?php

/**
 * import file
 * @function import
 * @param string $path alias + path 
 * @param string $includeType
 * @return void
 */
function import(string $path, string $includeType = "require_once"): void {
    # get aliases
    $aliases = $GLOBALS['container']['aliases'];

    # decalre pattern
    $pattern = "/(?<alias>\@\w+)\b/";

    # get matches for the pattern
    preg_match($pattern, $path, $matches);

    # get the alias
    $alias = $matches['alias'];

    # replace the alias with a "real path"
    $path = str_replace($alias, $aliases[$alias], $path);

    # get full path + file
    $file = $path . PHP_FILE_EXTENTION;


    # include the file by the $incldueType
    match($includeType) {
        "include" => include $file,
        "include_once" => include_once $file,
        "require" => require $file,
        "require_once" => require_once $file,
    };
}