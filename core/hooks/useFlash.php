<?php

/**
 * use flash message
 * @param string $key flash key
 * @param string $message flash message
 * @param string $type flash level
 */
function useFlash(string $key, string $message, string $type = FLASH_INFO_LEVEL): string|bool {
    $flash = $_SESSION["flash"][$key];
    
    if(isset($flash)) {
        $message = $flash;

        unset($flash);

        return $message;
    }

    $flash = $message;

    return true;
}