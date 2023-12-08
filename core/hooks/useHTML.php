<?php

/**
 * @package
 */
require_once "core/helpers/parse.php";


/**
 * parse HTML by URL
 * @function useHTML
 * @param string $url
 * @return string|false
 */
function useHTML(string $url): string|false {
    return @parse($url);
}