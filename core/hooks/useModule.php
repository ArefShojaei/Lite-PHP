<?php

/**
 * @desc load module
 * @function useModule
 * @param {string} $path - alias + path 
 * @param {string} $includeType 
 * @return {void}
 */
function useModule(string $path, $includeType = "include"): void {
    useLoad($path, $includeType);
}