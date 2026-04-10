<?php

import("@core/hooks/useType");


/**
 * Text content
 */
function _text(string $value): string {
    useType("text/plain");
    
    return $value;
}