<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * get enum by key from enum container
 * @function useEnum
 * @param string $enum enum name
 * @return string|int
 */
function useEnum(string $enum): string|int {
    list($enum, $key) = explode("@", $enum);

    $enums = useGlobal("enums");

    return $enums[$enum][$key];
}