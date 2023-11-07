<?php

/**
 * @desc add header
 * @function useHeader
 * @param {string} $name - the header name
 * @param {mixed} $defaultValue - the header value
 * @return {void}
 */
function useHeader(string $name, mixed $defaultValue): void {
    $_SERVER[$name] = $defaultValue;
}