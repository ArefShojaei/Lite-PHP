<?php

/**
 * get variable of $GLOBALS["container"]
 * @function useGlobal
 * @param string $name
 * @return string|array
 */
function useGlobal(string $name): string|array {
    return $GLOBALS["container"][$name];
}