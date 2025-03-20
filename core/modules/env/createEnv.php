<?php

require_once dirname(__DIR__, 2) . "/helpers/parse.php";
require_once dirname(__DIR__, 2) . "/hooks/useMatch.php";


function createEnv(): void {
    # Get '.env' file content
    $fileContent = parse(dirname(__DIR__, 3) . "\\" . ENV_FILE_EXTENTION);

    $pattern = "/(?<key>[A-Z_]+)\s*=\s*?(?<value>.+)/";

    $matches = useMatch($pattern, $fileContent, true);

    $keys = $matches["key"];
    
    $values = $matches["value"];

    # Add data to $_ENV
    foreach ($keys as $number => $key) {
        $_ENV[$key] = trim($values[$number]);
    }
}