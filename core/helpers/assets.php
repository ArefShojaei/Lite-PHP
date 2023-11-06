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