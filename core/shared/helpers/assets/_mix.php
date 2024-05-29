<?php

/**
 * @package
 */
import("@core/hooks/useMode");


/**
 * Get mixed asset file
 * @function _mix
 * @private
 * @return string
 */
function _mix(): string {
    return useMode() == PROD_MODE ? ".min" : "";
}