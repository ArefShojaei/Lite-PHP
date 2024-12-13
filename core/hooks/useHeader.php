<?php

/**
 * Add & Remove HTTP header
 */
function useHeader(string $name, string $value = null): void {
    isset($value) ? header("{$name}: {$value}") : header_remove($name);
}