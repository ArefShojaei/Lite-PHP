<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");


/**
 * make logs dir
 * @function _makeLogDir 
 * @private
 * @param string $basePath
 * @return void
 */
function _makeLogsDir(string $basePath): void {
    mkdir(useEnum("Logger@STORAGE_PATH"));
    mkdir($basePath);
}