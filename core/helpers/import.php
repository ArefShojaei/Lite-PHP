<?php

/**
 * @package
 */
require_once "core/hooks/useGlobal.php";
require_once "core/hooks/useMatch.php";


/**
 * extract alias
 * @function _extractAlias
 * @private
 * @param string $path
 * @return string
 */
function _extractAlias(string $path): string {
    # decalre pattern
    $pattern = "/(?<alias>\@\w+)\b/";

    # get matches for the pattern
    preg_match($pattern, $path, $matches);

    # return alias
    return $matches["alias"];
}

/**
 * replace alias to path
 * @function _replaceAliasToPath
 * @private
 * @param array $aliases
 * @param string $alias
 * @param string $path
 * @return string
 */
function _replaceAliasToPath(array $aliases, string $alias, string $path): string {
    return str_replace($alias, $aliases[$alias], $path);
}


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
    match($includeType) {
        INCLUDE_TYPE => include $filePath,
        INCLUDE_ONCE_TYPE => include_once $filePath,
        REQUIRE_TYPE => require $filePath,
        REQUIRE_ONCE_TYPE => require_once $filePath,
    };
}