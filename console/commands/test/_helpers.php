<?php

import("@commands/test/_shared");


function testAllModules(): void {
    global $passedTests, $failedTests;

    $modules = _getAllModules();

    
    $startTime = microtime(true);

    # Load all modules
    foreach ($modules as $module) {
        _loadModule($module);
    }

    $endTime = microtime(true);


    $timeDuration = number_format(abs($startTime - $endTime), 2);


    echo "[INFO] Finished Tests." . PHP_EOL;

    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    _makeTable([$passedTests, $failedTests]);
}


function testModule(string $module): void {
    global $passedTests, $failedTests;

    $startTime = microtime(true);

    # Load single module
    _loadModule($module);

    $endTime = microtime(true);


    $timeDuration = number_format(abs($startTime - $endTime), 2);

    
    echo "[INFO] Finished Test." . PHP_EOL;
    
    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    _makeTable([$passedTests, $failedTests]);
}