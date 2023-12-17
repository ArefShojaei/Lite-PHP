<?php

/**
 * @package
 */
import("@plugins/logger/_enum");
import("@core/hooks/useEnum");


/**
 * make log content
 * @function _makeLogContent
 * @private
 * @param array $params
 * @return string
 */
function _makeLogContent(array $params): string {
    $level = useEnum("Logger@LEVEL");

    return "[{$level}] " . implode(" ", $params) . PHP_EOL;
}