<?php

import("@core/hooks/useSession");


/**
 * Get & Set Flash message
 */
function useFlash(string $key, string $message = null, string $type = FLASH_INFO_LEVEL): array|bool {
    $flash = useSession("flash");
    
    # Get the Flash
    if(empty($message) && isset($flash[$key])) {
        $message = $flash[$key];

        unset($flash[$key]);

        return [$message, $type];
    }

    # Set the Falsh
    $flash[$key] = $message;

    return true;
}