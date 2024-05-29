<?php

/**
 * Replace Alias to path
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