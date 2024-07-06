<?php

import("@core/hooks/useState");


function createEnum(string $name, array $enums): void {
    if(empty($enums)) useState("enums.{$name}", []);

    # Add enum to enums container
    foreach ($enums as $enum => $value) {
        useState("enums.{$name}.{$enum}", $value);
    }
}