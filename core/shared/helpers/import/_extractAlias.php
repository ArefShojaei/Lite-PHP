<?php

require_once dirname(__DIR__, 3) . "/hooks/useMatch.php";


/**
 * @private
 */
function _extractAlias(string $path): string {
    $pattern = "/(?<alias>\@\w+)\b/";

    $matches = useMatch($pattern, $path);
    
    # Get alias
    return $matches["alias"];
}