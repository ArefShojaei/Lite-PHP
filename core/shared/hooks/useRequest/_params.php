<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request route params
 * @function _params 
 * @private
 * @return array
 */
function _params(): array {
    return useHTTP("params");
}