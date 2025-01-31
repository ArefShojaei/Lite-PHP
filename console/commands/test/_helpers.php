<?php

import("@commands/test/_shared");


function testAllModules(): void {
    global $passedTests, $failedTests;

    $modules = getAllModules();

    
    $startTime = microtime(true);

    # Load all modules
    foreach ($modules as $module) {
        loadModule($module);
    }

    $endTime = microtime(true);

    $timeDuration = number_format(abs($startTime - $endTime), 2);


    # Show result
    echo "[INFO] Finished Tests." . PHP_EOL;
    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    makeTable([$passedTests, $failedTests]);
}


function testModule(string $module): void {
    global $passedTests, $failedTests;

    $startTime = microtime(true);

    # Load moudle by name
    loadModule($module);

    $endTime = microtime(true);


    $timeDuration = number_format(abs($startTime - $endTime), 2);

    # Show result
    echo "[INFO] Finished Test." . PHP_EOL;
    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    makeTable([$passedTests, $failedTests]);
}