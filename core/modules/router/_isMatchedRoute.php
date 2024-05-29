<?php

/**
 * Get matched route status
 * @function _isMatchedRoute
 * @private
 * @param array $matches
 * @return bool
 */
function _isMatchedRoute(array $matches): bool {
    return isset($matches[0]) ? true : false;
}