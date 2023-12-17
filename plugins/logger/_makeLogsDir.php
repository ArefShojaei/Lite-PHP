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
    # make "storage" folder
    mkdir(useEnum("Logger@STORAGE_PATH"));
    
    # make "logs" folder
    mkdir($basePath);
}