<?php

import("@core/hooks/useGlobal");


/**
 * Get Config by key
 */
function useConfig(string $key): ?string {
    list($name, $key) = explode(".", $key);
    
    $configs = useGlobal("configs");

    return $configs[$name][$key] ?? null;
}