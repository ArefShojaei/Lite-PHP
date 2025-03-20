<?php

import("@core/hooks/useState");


function createEnum(string $name, array $enums): void {
    if(empty($enums)) useState("enums.{$name}", []);

    foreach ($enums as $enum => $value) {
        useState("enums.{$name}.{$enum}", $value);
    }
}