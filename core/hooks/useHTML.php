<?php

/**
 * @desc parse HTML by URL
 * @function useHTML
 * @param {string} $url
 * @return {string|bool}
 */
function useHTML(string $url): string|bool {
    return @file_get_contents($url);
}