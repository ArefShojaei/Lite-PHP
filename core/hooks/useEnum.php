<?php

import("@core/hooks/useGlobal");


/**
 * Get Enum by key
 */
function useEnum(string $enum): string|int|array|null {
    list($enum, $key) = explode("::", $enum);

    $enums = useGlobal("enums");

    return $enums[$enum][$key] ?? null;
}