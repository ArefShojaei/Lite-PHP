<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * Register enum
 * @function createEnum
 * @param string $name Enum name
 * @param array $enums Enum array of constants
 * @return void
 */
function createEnum(string $name, array $enums): void {
    # Decalre enums container if the enums is empty!
    if(empty($enums)) useState("enums.{$name}", []);

    # Add enum to enums container
    foreach ($enums as $enum => $value) {
        useState("enums.{$name}.{$enum}", $value);
    }
}