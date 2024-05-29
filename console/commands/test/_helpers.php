<?php

/**
 * @package
 */
import("@commands/test/_shared");


/**
 * test all modules
 * @function testAllModules
 * @return void
 */
function testAllModules(): void {
    global $passedTests, $failedTests;

    $modules = getAllModules();

    $startTime = microtime(true);

    # load all modules
    foreach ($modules as $module) {
        loadModule($module);
    }

    $endTime = microtime(true);

    $timeDuration = number_format(abs($startTime - $endTime), 2);

    # show result
    echo "Finished Tests." . PHP_EOL;
    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    makeTable([$passedTests, $failedTests]);
}


/**
 * test module by name
 * @function testModule
 * @param string $moudle module name
 * @return void
 */
function testModule($module): void {
    global $passedTests, $failedTests;

    $startTime = microtime(true);

    # load moudle by name
    loadModule($module);

    $endTime = microtime(true);


    $timeDuration = number_format(abs($startTime - $endTime), 2);

    # show result
    echo "Finished Test." . PHP_EOL;
    echo "\r\nDuration: {$timeDuration} sec" . PHP_EOL;


    makeTable([$passedTests, $failedTests]);
}