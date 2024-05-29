<?php

/**
 * Get & Set Flash message
 * @function useFlash
 * @param string $key Flash key
 * @param string $message Flash message
 * @param string $type Flash level
 * @return array|bool
 */
function useFlash(string $key, string $message = null, string $type = FLASH_INFO_LEVEL): array|bool {
    # get flash
    if(empty($message) && isset($_SESSION["flash"][$key])) {
        $message = $_SESSION["flash"][$key];

        unset($_SESSION["flash"][$key]);

        return [$message, $type];
    }

    # set falsh
    $_SESSION["flash"][$key] = $message;

    return true;
}