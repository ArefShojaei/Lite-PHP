<?php

import("@core/hooks/useEnv");


/**
 * Get ENV mode
 */
function useMode(): string {
    return useEnv("APP_MODE");
}