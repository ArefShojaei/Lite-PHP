<?php

/**
 * @package
 */
import("@core/hooks/useType");


/**
 * Text content
 * @function _text
 * @param string $value
 * @return string
 */
function _text(string $value): string {
    # set content-type
    useType("text/plain");
    
    # return the $value as pure text
    return $value;
}