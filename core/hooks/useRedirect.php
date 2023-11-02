<?php

/**
 * @desc redirect to a route
 * @function useRedirect
 * @param {string} $route
 * @return {void}
 */
function useRedirect(string $route): void {
    header("Location: {$route}");
}