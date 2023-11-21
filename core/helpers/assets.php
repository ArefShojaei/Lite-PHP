<?php

/**
 * get asset path
 * @function asset
 * @param string $src asset file path
 * @return string
 */
function asset(string $src): string {
    return "/public/{$src}";
}

/**
 * get css path
 * @function css
 * @param string $filename
 * @return string
 */
function css(string $filename): string {
    return "/public/css/{$filename}.css";
}

/**
 * get js path
 * @function js
 * @param string $filename
 * @return string
 */
function js(string $filename): string {
    return "/public/js/{$filename}.js";
}

/**
 * get img path
 * @function img
 * @param string $file file + ext
 * @return string
 */
function img(string $file): string {
    return "/public/img/{$file}";
}