<?php

/**
 * @desc register env
 * @function createEnv
 * @return {void}
 */
function createEnv(): void {
    $prasedContent = file_get_contents(".env");

    preg_match_all("/(?<key>[A-Z_]+)\s*=\s*?(?<value>.+)/", $prasedContent, $matches);

    $keys = $matches["key"];
    $values = $matches["value"];

    foreach ($keys as $number => $key) {
        $_ENV[$key] = $values[$number];
    }
}