<?php

/**
 * @package
 */
import("@core/helpers/table");


/**
 * load module
 * @function loadModule
 * @param string $module module name
 * @return void
 */
function loadModule(string $module): void {
    $path = "modules/{$module}/_test.php";
    
    file_exists($path) && require_once $path;
}


/**
 * make table
 * @function makeTable
 * @param array $params
 * @return void
 */
function makeTable(array $params): void {
    list($passedTests, $failedTests) = $params;

    createTable(function() use ($passedTests, $failedTests) {
        addRow("TOTAL");
        
        addSeparator();
        
        echo addColumn("PASSED", length:9, position:STR_PAD_BOTH) . addColumn("FAILED", length:8, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
        
        addSeparator(fill:"-");
        
        echo addColumn($passedTests, length:9, position:STR_PAD_BOTH) . addColumn($failedTests, length:8, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
    });
}