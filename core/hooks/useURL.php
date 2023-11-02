<?php

/**
 * @desc parse url
 * @function useURL
 * @param {string} $url
 * @return {array}
 */
function useURL(string $url = null): array {
    return $url ? parse_url($url) : parse_url($_SERVER['REQUEST_URI']);
}