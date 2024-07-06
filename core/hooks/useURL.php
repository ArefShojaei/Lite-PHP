<?php

import("@core/hooks/useHTTP");


/**
 * Parse url
 */
function useURL(string $url = null): array {
    return isset($url) ? parse_url($url) : parse_url(useHTTP("REQUEST_URI"));
}