<?php

/**
 * @desc get header by name
 * @function useHTTP
 * @param {string} $name
 * @return {string}
 */
function useHTTP(string $name): string {
    return $_SERVER[$name];
}