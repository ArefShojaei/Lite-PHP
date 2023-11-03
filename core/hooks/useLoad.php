<?php

/**
 * @desc load file
 * @function useLoad
 * @param {string} $path - alias + path 
 * @param {string} $includeType 
 * @return {void}
 */
function useLoad(string $path, string $includeType): void {
    $aliases = $GLOBALS['container']['aliases'];

    $pattern = "/(?<alias>\@\w+)\b/";

    preg_match($pattern, $path, $matches);

    $alias = $matches['alias'];

    $path = str_replace($alias, $aliases[$alias], $path);

    $file = $path . ".php";

    match($includeType) {
        "include" => include $file,
        "include_once" => include_once $file,
        "require" => require $file,
        "require_once" => require_once $file,
    };
}