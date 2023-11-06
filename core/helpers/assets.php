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