<?php

/**
 * add & remove header
 * @function useHeader
 * @param string $name header name
 * @param string $defaultValue header value
 * @return void
 */
function useHeader(string $name, string $defaultValue = null): void {
    isset($defaultValue) ? header("{$name}: {$defaultValue}") : header_remove($name);
}