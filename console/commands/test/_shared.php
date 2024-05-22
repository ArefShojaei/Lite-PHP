<?php

/**
 * @package
 */
import("@core/helpers/table");


/**
 * load module
 * @function _loadModule
 * @private
 * @param string $module module name
 * @return void
 */
function _loadModule(string $module): void {
    $path = "modules/{$module}/_test.php";
    
    file_exists($path) && require_once $path;
}


/**
 * make table
 * @function _makeTable
 * @private
 * @param array $param
 * @return void
 */
function _makeTable(array $param, $length = 18): void {
    list($passedTests, $failedTests) = $param;

    table(function () use ($passedTests, $failedTests) {
        row("TOTAL");
        separator();
        row("PASSED | FAILED");
        separator(fill: "-");
        row("   {$passedTests}   |    {$failedTests}  ");
    }, $length);
}