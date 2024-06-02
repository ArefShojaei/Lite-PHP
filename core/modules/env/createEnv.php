<?php

/**
 * @package
 */
require_once dirname(__DIR__, 2) . "/helpers/parse.php";
require_once dirname(__DIR__, 2) . "/hooks/useMatch.php";


/**
 * Register env
 * @function createEnv
 * @return void
 */
function createEnv(): void {
    # Get '.env' file content
    $prasedContent = parse(dirname(__DIR__, 3) . "\\" . ENV_FILE_EXTENTION);

    # Declare pattern
    $pattern = "/(?<key>[A-Z_]+)\s*=\s*?(?<value>.+)/";

    # Get matches for the pattern
    $matches = useMatch($pattern, $prasedContent, true);

    # Get keys
    $keys = $matches["key"];
    
    # Get values
    $values = $matches["value"];

    # Add data to $_ENV
    foreach ($keys as $number => $key) {
        $_ENV[$key] = trim($values[$number]);
    }
}