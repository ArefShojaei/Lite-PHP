<?php

/**
 * get enum by key from enum container
 * @function useEnum
 * @param string $enum enum name
 * @return string|int
 */
function useEnum(string $enum): string|int {
    list($enum, $key) = explode("@", $enum);

    return $GLOBALS['container']['enums'][$enum][$key];
}