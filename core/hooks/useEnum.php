<?php

/**
 * @desc use enum data
 * @function useEnum
 * @param {string} $enum - enum name
 * @example Auth@LOGIN => 'Login Form'
 * @return {string|number}
 */
function useEnum(string $enum): string|int {
    list($enum, $key) = explode("@", $enum);

    return $GLOBALS['container']['enums'][$enum][$key];
}