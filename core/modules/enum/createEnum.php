<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * register enum
 * @function createEnum
 * @param string $name enum name
 * @param array $enums enum array of constants
 * @return void
 */
function createEnum(string $name, array $enums): void {
    $enums = useGlobal("enums");

    $enums[$name] = [];

    foreach ($enums as $enum => $value) {
        $enums[$name][$enum] = $value;
    }
}