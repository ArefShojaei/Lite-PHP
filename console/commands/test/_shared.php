<?php

import("@core/helpers/table");


function _loadModule(string $module): void {
    $path = "modules/{$module}/_test.php";
    
    file_exists($path) && require_once $path;
}

function _makeTable(array $params): void {
    list($passedTests, $failedTests) = $params;

    
    # Table size
    $length = 18;

    # Table structure
    createTable(function() use ($passedTests, $failedTests) {
        echo addRow("TOTAL");
        
        echo addSeparator();
        
        echo addColumn("PASSED", length:9, position:STR_PAD_BOTH) . addColumn("FAILED", length:8, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
        
        echo addSeparator(fill:"-");
        
        echo addColumn($passedTests ?? 0, length:9, position:STR_PAD_BOTH) . addColumn($failedTests ?? 0, length:8, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
    }, $length);
}

function _getAllModules(): array {
    $modules = scandir("modules");

    # Remove "." & ".." to clean $modules
    array_shift($modules);
    array_shift($modules);   
    
    
    return $modules;
}