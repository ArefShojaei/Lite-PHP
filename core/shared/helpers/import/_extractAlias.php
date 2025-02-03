<?php

require_once dirname(__DIR__, 3) . "/hooks/useMatch.php";


function _extractAlias(string $path): string {
    $pattern = "/(?<alias>\@\w+)\b/";

    $matches = useMatch($pattern, $path);
    
    # Get matched alias
    return $matches["alias"];
}