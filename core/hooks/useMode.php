<?php

/**
 * @package
 */
import("@core/hooks/useEnv");


/**
 * get env mode
 * @function useMode
 * @return string
 */
function useMode(): string {
    return useEnv("APP_MODE");
}