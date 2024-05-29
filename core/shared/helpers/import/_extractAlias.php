<?php

/**
 * @package
 */
require_once dirname(__DIR__, 3) . "/hooks/useMatch.php";


/**
 * Extract Alias
 * @function _extractAlias
 * @private
 * @param string $path
 * @return string
 */
function _extractAlias(string $path): string {
    # Decalre pattern
    $pattern = "/(?<alias>\@\w+)\b/";

    # Get matches for the pattern
    $matches = useMatch($pattern, $path);
    # return alias
    return $matches["alias"];
}