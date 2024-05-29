<?php

/**
 * @package
 */
require_once dirname(__DIR__) . "/hooks/useGlobal.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_extractAlias.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_replaceAliasToPath.php";


/**
 * Load file
 * @function import
 * @param string $path Alias + Path 
 * @param string $includeType
 * @return void
 */
function import(string $path, string $includeType = REQUIRE_ONCE_TYPE): void {
    # Get Aliases
    $aliases = useGlobal("aliases");

    # Get the Alias
    $alias = _extractAlias($path);

    # Replace the Alias with a "Real path"
    $path = _replaceAliasToPath($aliases, $alias, $path);

    # Get file path
    $filePath = $path . PHP_FILE_EXTENTION;


    # Load the file by the include type
    match ($includeType) {
        INCLUDE_TYPE => include $filePath,
        INCLUDE_ONCE_TYPE => include_once $filePath,
        REQUIRE_TYPE => require $filePath,
        REQUIRE_ONCE_TYPE => require_once $filePath,
    };
}