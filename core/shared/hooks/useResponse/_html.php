<?php

import("@core/hooks/useType");


/**
 * HTML content
 * @private
 */
function _html(string $value): string {
    useType("text/html");
    
    # Get the value as HTML
    return $value;
}