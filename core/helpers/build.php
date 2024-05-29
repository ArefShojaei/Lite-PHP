<?php

/**
 * @package
 */
import("@core/helpers/url");


/**
 * Build URL
 * @function buildURL
 * @param string $url
 * @return string 
 */
function buildURL(string $url): string {
    return baseURL() . $url;
}

/**
 * Build path
 * @function buildPath
 * @param string $basePath
 * @param string $file
 * @param string $ext
 * @return string
 */
function buildPath(string $basePath, string $file, string $ext = PHP_FILE_EXTENTION): string {
    return $basePath . $file . $ext;
}