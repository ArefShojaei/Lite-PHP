<?php

/**
 * @package
 */
import("@core/hooks/useEnv");


/**
 * Get ENV mode
 * @function useMode
 * @return string
 */
function useMode(): string {
    return useEnv("APP_MODE");
}