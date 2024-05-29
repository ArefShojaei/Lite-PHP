<?php

/**
 * @package
 */
import("@core/helpers/parse");


/**
 * Parse HTML by URL
 * @function useHTML
 * @param string $url
 * @return string|false
 */
function useHTML(string $url): string|false {
    return @parse($url);
}