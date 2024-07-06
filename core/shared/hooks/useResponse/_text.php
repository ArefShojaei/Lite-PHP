<?php

import("@core/hooks/useType");


/**
 * Text content
 * @private
 */
function _text(string $value): string {
    useType("text/plain");
    
    # Get the value as pure text
    return $value;
}