<?php

/**
 * @package
 */
require_once dirname(__DIR__) . "/hooks/useGlobal.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_extractAlias.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_replaceAliasToPath.php";


/**
 * import file
 * @function import
 * @param string $path alias + path 
 * @param string $includeType
 * @return void
 */
function import(string $path, string $includeType = REQUIRE_ONCE_TYPE): void {
    # get aliases
    $aliases = useGlobal("aliases");

    # get the alias
    $alias = _extractAlias($path);

    # replace the alias with a "real path"
    $path = _replaceAliasToPath($aliases, $alias, $path);

    # get file path
    $filePath = $path . PHP_FILE_EXTENTION;


    # include the file by the $incldueType
    match ($includeType) {
        INCLUDE_TYPE => include $filePath,
        INCLUDE_ONCE_TYPE => include_once $filePath,
        REQUIRE_TYPE => require $filePath,
        REQUIRE_ONCE_TYPE => require_once $filePath,
    };
}