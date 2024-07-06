<?php

/**
 * Add test wrapper
 */
function describe(string $description, callable $action): void {
    # Test states
    static $passedTests = 0;
    static $failedTests = 0;

    
    echo "\n📌 Describing \"{$description}\":" . PHP_EOL;

    $action();
}


/**
 * Add test
 */
function it(string $description, callable $action) {
    echo "  🧪️ Running {$description}:" . PHP_EOL;

    $action();
}