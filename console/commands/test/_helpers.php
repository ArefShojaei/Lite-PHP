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

    # load all modules
    foreach ($modules as $module) {
        loadModule($module);
    }

    # show result
    echo "\r\nFinish Tests." . PHP_EOL;

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
    
    # load moudle by name
    loadModule($module);

    # show result
    echo "\r\nFinish Test." . PHP_EOL;

    makeTable([$passedTests, $failedTests]);
}
