<?php

/**
 * @private
 */
function _addHeaderTable(int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, "-", $position) . "+" . PHP_EOL;
}

/**
 * @private
 */
function _addFooterTable(int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, "-", $position) . "+" . PHP_EOL;
}

function addColumn(string $title, $position = STR_PAD_RIGHT, int $length = 18, $isLast = false): string {
    return "|" . str_pad($title, $length, " ", $position) . ($isLast ? "|" : "");
}

function addRow(string $title, $position = STR_PAD_BOTH, int $length = 18): string {
    return "|" . str_pad($title, $length, " ", $position) . "|" . PHP_EOL;
}

function addSeparator(string $fill = "=", int $position = STR_PAD_BOTH, int $length = 18): string {
    return "+" . str_pad("", $length, $fill, $position) . "+" . PHP_EOL;
}

function createTable(callable $callback, int $length = 18): void {
    echo _addHeaderTable(length:$length);
    
    # Add body
    $callback();
    
    echo _addFooterTable(length:$length);
}
