<?php

/**
 * @package
 */
import("@core/helpers/build");
import("@core/hooks/useMode");


/**
 * get assets base path
 * @function getAssetsBasePath
 * @return string
 */
function getAssetsBasePath(): string {
    return useMode() !== PROD_MODE ? BASE_ASSETS_PATH__RESOURCES : BASE_ASSETS_PATH__PUBLIC;
}

/**
 * get asset path
 * @function asset
 * @param string $src asset file path
 * @return string
 */
function asset(string $src): string {
    return buildURL(getAssetsBasePath() . "{$src}");
}

/**
 * get mixed asset file
 * @function _mix
 * @private
 * @return string
 */
function _mix(): string {
    return useMode() == PROD_MODE ? ".min" : "";
}

/**
 * get css path
 * @function css
 * @param string $filename
 * @return string
 */
function css(string $filename): string {
    return buildURL(getAssetsBasePath() . "/css/{$filename}" . _mix() . CSS_FILE_EXTENTION);
}

/**
 * get js path
 * @function js
 * @param string $filename
 * @return string
 */
function js(string $filename): string {
    return buildURL(getAssetsBasePath() . "/js/{$filename}". _mix() . JS_FILE_EXTENTION);
}

/**
 * get img path
 * @function img
 * @param string $file file + ext
 * @return string
 */
function img(string $file): string {
    return buildURL(getAssetsBasePath() . "/img/{$file}");
}

/**
 * get icon path
 * @function icon
 * @param string $file file + ext
 * @return string
 */
function icon(string $file): string {
    return buildURL(getAssetsBasePath() . "/icons/{$file}");
}