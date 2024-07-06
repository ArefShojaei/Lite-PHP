<?php

/**
 * Get & Set Flash message
 */
function useFlash(string $key, string $message = null, string $type = FLASH_INFO_LEVEL): array|bool {
    # Get Flash
    if(empty($message) && isset($_SESSION["flash"][$key])) {
        $message = $_SESSION["flash"][$key];

        unset($_SESSION["flash"][$key]);

        return [$message, $type];
    }

    # Set Falsh
    $_SESSION["flash"][$key] = $message;

    return true;
}