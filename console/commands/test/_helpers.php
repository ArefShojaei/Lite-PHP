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

    # scan modules DIR to get module names
    $modules = scandir("modules");

    # remove "." & ".." to clean $modules
    array_shift($modules);
    array_shift($modules);


    # load all modules
    foreach ($modules as $module) {
        _loadModule($module);
    }

    # show result
    echo "\r\nFinish Tests." . PHP_EOL;

    _makeTable([$passedTests, $failedTests]);
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
    _loadModule($module);

    # show result
    echo "\r\nFinish Test." . PHP_EOL;

    _makeTable([$passedTests, $failedTests]);
}
