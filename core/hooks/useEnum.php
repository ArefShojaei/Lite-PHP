<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * Get Enum by key from enum container
 * @function useEnum
 * @param string $enum Enum name
 * @return string|int|array
 */
function useEnum(string $enum): string|int|array {
    list($enum, $key) = explode("::", $enum);

    $enums = useGlobal("enums");

    return $enums[$enum][$key];
}