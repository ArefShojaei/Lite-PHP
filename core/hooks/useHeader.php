<?php

/**
 * add & remove header
 * @function useHeader
 * @param string $name header name
 * @param mixed $defaultValue header value
 * @return void
 */
function useHeader(string $name, mixed $defaultValue = null): void {
    isset($defaultValue) ? header("{$name}: {$defaultValue}") : header_remove($name);
}