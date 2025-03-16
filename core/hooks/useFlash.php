<?php

import("@core/hooks/useSession");


/**
 * Get & Set Flash message
 */
function useFlash(string $key = null, string $message = null, string $type = FLASH_INFO_LEVEL): array|bool {
    $flashes = useSession("flashes") ?? [];

    if (!isset($key) && !isset($message)) return $flashes;

    # Get the flash
    if (!isset($message)) {
        $message = $flashes[$key] ?? null;
    
        unset($flashes[$key]);

        useSession("flashes", $flashes);

        return [$message, $type];
    }

    # Set the flash;
    $flashes[$key] = $message;

    return useSession("flashes", $flashes);
}