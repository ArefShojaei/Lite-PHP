<?php

/**
 * Add test wrapper
 */
function describe(string $description, callable $callback): void {
    # Test states
    static $passedTests = 0;
    static $failedTests = 0;

    
    echo "\n📌 Describing \"{$description}\":" . PHP_EOL;

    $callback();
}


/**
 * Add test
 */
function it(string $description, callable $callback) {
    echo "  🧪️ Running {$description}:" . PHP_EOL;

    $callback();
}