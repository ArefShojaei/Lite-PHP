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
    # Set content-type
    useType("text/html");
    
    # Get the value as HTML
    return $value;
}