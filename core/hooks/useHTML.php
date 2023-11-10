<?php

/**
 * parse HTML by URL
 * @function useHTML
 * @param string $url
 * @return string|false
 */
function useHTML(string $url): string|false {
    return @file_get_contents($url);
}