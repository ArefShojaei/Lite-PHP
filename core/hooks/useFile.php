<?php

/**
 * get file data from $_FILES super global
 * @function useFile
 * @param string $key
 * @return array
 */
function useFile(string $key = null): array {
    return isset($key) ? $_FILES[$key] : $_FILES;
}