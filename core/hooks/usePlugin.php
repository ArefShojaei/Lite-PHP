<?php

/**
 * @desc load plugin
 * @function usePlugin
 * @param {string} $path - alias + path 
 * @param {string} $includeType 
 * @return {void}
 */
function usePlugin(string $path, $includeType = "include"): void {
    useLoad($path, $includeType);
}