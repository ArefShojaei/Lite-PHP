<?php

/**
 * @desc register enum
 * @function createEnu,
 * @param {string} $name - enum name
 * @param {array} $enums - enum array of constants
 * @return {void}
 */
function createEnum(string $name, array $enums): void {
    $GLOBALS['container']['enums'][$name] = [];

    foreach ($enums as $enum => $value) {
        $GLOBALS['container']['enums'][$name][$enum] = $value;
    }
}