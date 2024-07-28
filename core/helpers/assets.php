<?php

import("@core/helpers/build");
import("@core/hooks/useMode");
import("@core/shared/helpers/assets/_mix");
import("@core/shared/view/_encryptView");


/**
 * Get views path to include partial file
 */
function partial(string $path): string {
    [$encryptedViewName, $viewName] = _encryptView($path);

    $filePath = buildPath(COMPILED_VIEWS_PATH, "/" . $encryptedViewName);

    if(!file_exists($filePath)) useError("\"{$viewName}\" view not found!");

    return $filePath;
}

/**
 * Get assets base path
 */
function getAssetsBasePath(): string {
    return useMode() !== PROD_MODE ? RESOURCES_ASSETS_PATH : PUBLIC_ASSETS_PATH;
}

/**
 * Get asset path
 */
function asset(string $src): string {
    return buildURL(getAssetsBasePath() . "{$src}");
}

/**
 * Get css path
 */
function css(string $filename): string {
    return buildURL(getAssetsBasePath() . "/css/{$filename}" . _mix() . CSS_FILE_EXTENTION);
}

/**
 * Get js path
 */
function js(string $filename): string {
    return buildURL(getAssetsBasePath() . "/js/{$filename}". _mix() . JS_FILE_EXTENTION);
}

/**
 * Get img path
 */
function img(string $file): string {
    return buildURL(getAssetsBasePath() . "/img/{$file}");
}

/**
 * Get icon path
 */
function icon(string $file): string {
    return buildURL(getAssetsBasePath() . "/icons/{$file}");
}