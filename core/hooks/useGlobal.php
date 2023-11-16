<?php

/**
 * get variable of $GLOBALS["container"]
 * @function useGlobal
 * @param string $key
 * @return string|array
 */
function useGlobal(string $key): string|array {
    return $GLOBALS["container"][$key];
}