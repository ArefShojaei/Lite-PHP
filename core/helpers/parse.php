<?php

/**
 * parse file content
 * @function parse
 * @param string $src file path
 * @return string
 */
function parse(string $src): string {
    return file_get_contents($src);
}