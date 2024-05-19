<?php

/**
 * @package
 */
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
    $matches = useMatch($pattern, $path);
    # return alias
    return $matches["alias"];
}