<?php

function _replaceAliasToPath(array $aliases, string $alias, string $path): string {
    return str_replace($alias, $aliases[$alias], $path);
}