<?php

/**
 * @package
 */
import("@core/helpers/url");


/**
 * build url
 * @function buildURL
 * @param string $url
 * @return string 
 */
function buildURL(string $url): string {
    return baseURL() . $url;
}

/**
 * build path
 * @function buildPath
 * @param string $basePath
 * @param string $src
 * @param string $ext
 * @return string
 */
function buildPath(string $basePath, string $src, string $ext = PHP_FILE_EXTENTION): string {
    return $basePath . $src . $ext;
}