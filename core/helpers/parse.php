<?php

/**
 * @desc parse file content
 * @function parse
 * @param {string} $filePath
 * @return {string}
 */
function parse(string $filePath): string {
    return file_get_contents($filePath);
}