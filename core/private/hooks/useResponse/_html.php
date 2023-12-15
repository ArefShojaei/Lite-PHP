<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * HTML content
 * @function _html
 * @private
 * @param string $value
 * @return string
 */
function _html(string $value): string {
    # set content-type
    useType("text/html");
    
    # reutrn the $value as HTML
    return $value;
}