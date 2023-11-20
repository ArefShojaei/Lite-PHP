<?php

/**
 * add header
 * @function useHeader
 * @param string $name header name
 * @param mixed $defaultValue header value
 * @return void
 */
function useHeader(string $name, mixed $defaultValue): void {
    $_SERVER[$name] = $defaultValue;
}