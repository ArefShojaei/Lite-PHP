<?php

/**
 * add header
 * @function useHeader
 * @param string $name header name
 * @param string $defaultValue header value
 * @return void
 */
function useHeader(string $name, string $defaultValue): void {
    $_SERVER[$name] = $defaultValue;
}