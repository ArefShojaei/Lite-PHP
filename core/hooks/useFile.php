<?php

/**
 * Get the Request file data from $_FILES
 */
function useFile(string $key = null): array {
    return isset($key) ? $_FILES[$key] : $_FILES;
}