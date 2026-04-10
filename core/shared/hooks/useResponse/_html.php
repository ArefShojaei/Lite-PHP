<?php

import("@core/hooks/useType");


/**
 * HTML content
 */
function _html(string $value): string {
    useType("text/html");
    
    return $value;
}