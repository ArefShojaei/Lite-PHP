<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request route params
 * @function _params 
 * @private
 * @return array
 */
function _params(): array {
    return useHTTP("params");
}