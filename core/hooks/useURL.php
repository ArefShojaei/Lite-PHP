<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * @desc parse url
 * @function useURL
 * @param {string} $url
 * @return {array}
 */
function useURL(string $url = null): array {
    return $url ? parse_url($url) : parse_url(useHTTP("REQUEST_URI"));
}