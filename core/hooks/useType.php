<?php

/**
 * add content type to the header
 * @function useType
 * @param string $mimeType
 * @return void
 */
function useType(string $mimeType): void {
    header("Content-Type: {$mimeType}");
}