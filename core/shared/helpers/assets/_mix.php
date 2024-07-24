<?php

import("@core/hooks/useMode");


/**
 * Get mixed asset file
 */
function _mix(): string {
    return useMode() == PROD_MODE ? ".min" : "";
}