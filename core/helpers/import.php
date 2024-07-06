<?php

require_once dirname(__DIR__) . "/hooks/useGlobal.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_extractAlias.php";
require_once dirname(__DIR__) . "/shared/helpers/import/_replaceAliasToPath.php";


/**
 * Load file
 * @param $path Alias with Path 
 */
function import(string $path, string $includeType = REQUIRE_ONCE_TYPE): void {
    $aliases = useGlobal("aliases");

    $alias = _extractAlias($path);

    $path = _replaceAliasToPath($aliases, $alias, $path);

    $filePath = $path . PHP_FILE_EXTENTION;


    match ($includeType) {
        INCLUDE_TYPE => include $filePath,
        INCLUDE_ONCE_TYPE => include_once $filePath,
        REQUIRE_TYPE => require $filePath,
        REQUIRE_ONCE_TYPE => require_once $filePath,
    };
}