<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * build url
 * @param string $url
 * @return string 
 */
function buildURL(string $url): string {
    return useHTTP("HTTP_HOST") . $url;
}

/**
 * build path
 * @param string $basePath
 * @param string $src
 * @param string $ext
 * @return string
 */
function buildPath(string $basePath, string $src, string $ext = PHP_FILE_EXTENTION): string {
    return $basePath . $src . $ext;
}