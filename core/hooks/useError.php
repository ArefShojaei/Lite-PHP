<?php

/**
 * Thorw custom error message
 * @function useError
 * @param string $message Error message
 * @return void
 */
function useError(string $message): void {
    die($message);
}