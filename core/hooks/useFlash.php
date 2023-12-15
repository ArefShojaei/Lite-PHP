<?php

/**
 * use flash message
 * @function useFlash
 * @param string $key flash key
 * @param string $message flash message
 * @param string $type flash level
 * @return array|bool
 */
function useFlash(string $key, string $message, string $type = FLASH_INFO_LEVEL): array|bool {
    # get flash
    if(isset($_SESSION["flash"][$key])) {
        $message = $_SESSION["flash"][$key];

        unset($_SESSION["flash"][$key]);

        return [$message, $type];
    }

    # set falsh
    $_SESSION["flash"][$key] = $message;

    return true;
}