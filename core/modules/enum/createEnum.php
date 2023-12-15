<?php

/**
 * @package
 */
import("@core/hooks/useState");


/**
 * register enum
 * @function createEnum
 * @param string $name enum name
 * @param array $enums enum array of constants
 * @return void
 */
function createEnum(string $name, array $enums): void {
    # decalre enums container if the enums is empty!
    if(empty($enums)) useState("enums", [$name], []);

    # add enum to the enums container
    foreach ($enums as $enum => $value) {
        useState("enums", [$name, $enum], $value);
    }
}