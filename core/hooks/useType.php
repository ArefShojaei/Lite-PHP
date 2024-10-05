<?php

/**
 * Set content-type to HTTP header
 */
function useType(string $mimeType): void {
    header("Content-Type: {$mimeType}");
}