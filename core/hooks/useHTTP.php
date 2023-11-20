<?php

/**
 * get header by name
 * @function useHTTP
 * @param string $name
 * @return string|array
 */
function useHTTP(string $name): string|array {
    return $_SERVER[$name];
}