<?php

/**
 * Redirect to a route
 */
function useRedirect(string $route): void {
    header("Location: {$route}", true, 302);
    exit;
}