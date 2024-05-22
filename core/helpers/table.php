<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");



/**
 * add header to table
 * @function _addHeaderTable
 * @private
 * @param int $position
 * @param int $length
 * @return string
 */
function _addHeaderTable(int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, "-", $position) . "+" . PHP_EOL;
}


/**
 * add footer to table
 * @function _addFooterTable
 * @private
 * @param int $position
 * @param int $length
 * @return string
 */
function _addFooterTable(int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, "-", $position) . "+" . PHP_EOL;
}


/**
 * add column to table
 * @function addColumn
 * @param string $title
 * @param int $position
 * @param int $length
 * @return string
 */
function addColumn(string $title, $position = STR_PAD_RIGHT, int $length = 18, $isLast = false): string {
    return "|" . str_pad($title, $length, " ", $position) . ($isLast ? "|" : "");
}

/**
 * add row to table
 * @function addRow
 * @param string $title
 * @param int $position
 * @param int $length
 * @return string
 */
function addRow(string $title, $position = STR_PAD_BOTH, int $length = 18): string {
    return "|" . str_pad($title, $length, " ", $position) . "|" . PHP_EOL;
}


/**
 * add separator to table
 * @function addSeparator
 * @param string $fill
 * @param int $position
 * @param int $length
 * @return string
 */
function addSeparator(string $fill = "=", int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, $fill, $position) . "+" . PHP_EOL;
}


/**
 * create table
 * @function createTable
 * @param callable $callback
 * @param int $length
 * @return void
 */
function createTable(callable $callback, int $length): void {
    # add header
    echo _addHeaderTable(length:$length);
    
    # add body
    $callback();
    
    # add footer
    echo _addFooterTable(length:$length);
}
