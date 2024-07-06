<?php

/**
 * Thorw custom error message
 */
function useError(string $message): void {
    trigger_error($message);
}