<?php

/**
 * Parse file content
 */
function parse(string $src): string {
    return file_get_contents($src);
}