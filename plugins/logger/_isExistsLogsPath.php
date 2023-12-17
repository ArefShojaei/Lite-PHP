<?php

/**
 * check to exists logs path
 * @function _isExistsLogPath 
 * @private
 * @param string $basePath
 * @return bool
 */
function _isExistsLogsPath(string $basePath): bool {
    return is_dir($basePath);
}