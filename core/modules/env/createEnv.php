<?php

/**
 * @package
 */
require_once "core/helpers/parse.php";


/**
 * register env
 * @function createEnv
 * @return void
 */
function createEnv(): void {
    # get '.env' file content
    $prasedContent = parse(ENV_FILE_EXTENTION);

    # declare pattern
    $pattern = "/(?<key>[A-Z_]+)\s*=\s*?(?<value>.+)/";

    # get matches for the pattern
    preg_match_all($pattern, $prasedContent, $matches);

    # get keys
    $keys = $matches["key"];
    
    # get values
    $values = $matches["value"];

    # add data to $_ENV
    foreach ($keys as $number => $key) {
        $_ENV[$key] = trim($values[$number]);
    }
}