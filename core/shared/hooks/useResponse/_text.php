<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * Text content
 * @function _text
 * @private
 * @param string $value
 * @return string
 */
function _text(string $value): string {
    # Set content-type
    useType("text/plain");
    
    # Get the value as pure text
    return $value;
}