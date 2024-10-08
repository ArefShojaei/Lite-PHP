<?php

/**
 * Add & Remove HTTP header
 */
function useHeader(string $name, string $defaultValue = null): void {
    isset($defaultValue) ? header("{$name}: {$defaultValue}") : header_remove($name);
}