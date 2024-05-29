<?php

/**
 * Add & Remove header
 * @function useHeader
 * @param string $name Header name
 * @param string $defaultValue Header value
 * @return void
 */
function useHeader(string $name, string $defaultValue = null): void {
    isset($defaultValue) ? header("{$name}: {$defaultValue}") : header_remove($name);
}