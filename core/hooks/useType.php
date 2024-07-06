<?php

/**
 * Add content-type to header
 */
function useType(string $mimeType): void {
    header("Content-Type: {$mimeType}");
}