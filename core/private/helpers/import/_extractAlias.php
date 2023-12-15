<?php

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