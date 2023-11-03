<?php

/**
 * @desc get header by name
 * @function useHTTP
 * @param {string} $name
 * @return {mixed}
 */
function useHTTP(string $name): mixed {
    return $_SERVER[$name];
}