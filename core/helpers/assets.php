<?php

/**
 * @desc get asset path
 * @function asset
 * @param {string} $assetPath
 * @return {string}
 */
function asset(string $assetPath): string {
    return "public/{$assetPath}";
}

/**
 * @desc get css path
 * @function css
 * @param {string} $filename
 * @return {string}
 */
function css(string $filename): string {
    return "public/css/{$filename}.css";
}

/**
 * @desc get js path
 * @function js
 * @param {string} $filename
 * @return {string}
 */
function js(string $filename): string {
    return "public/js/{$filename}.js";
}

/**
 * @desc get img path
 * @function img
 * @param {string} $file + ext
 * @return {string}
 */
function img(string $file): string {
    return "public/img/{$file}";
}