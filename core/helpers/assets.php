<?php

/**
 * @package
 */
import("@core/helpers/build");
import("@core/hooks/useMode");
import("@core/shared/assets/_mix");


/**
 * Get assets base path
 * @function getAssetsBasePath
 * @return string
 */
function getAssetsBasePath(): string {
    return useMode() !== PROD_MODE ? BASE_ASSETS_PATH__RESOURCES : BASE_ASSETS_PATH__PUBLIC;
}

/**
 * Get asset path
 * @function asset
 * @param string $src asset file path
 * @return string
 */
function asset(string $src): string {
    return buildURL(getAssetsBasePath() . "{$src}");
}

/**
 * Get css path
 * @function css
 * @param string $filename
 * @return string
 */
function css(string $filename): string {
    return buildURL(getAssetsBasePath() . "/css/{$filename}" . _mix() . CSS_FILE_EXTENTION);
}

/**
 * Get js path
 * @function js
 * @param string $filename
 * @return string
 */
function js(string $filename): string {
    return buildURL(getAssetsBasePath() . "/js/{$filename}". _mix() . JS_FILE_EXTENTION);
}

/**
 * Get img path
 * @function img
 * @param string $file file + ext
 * @return string
 */
function img(string $file): string {
    return buildURL(getAssetsBasePath() . "/img/{$file}");
}

/**
 * Get icon path
 * @function icon
 * @param string $file file + ext
 * @return string
 */
function icon(string $file): string {
    return buildURL(getAssetsBasePath() . "/icons/{$file}");
}