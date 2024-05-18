<?php

/**
 * add test wrapper
 * @function describe
 * @param string $description test wrapper description
 * @param callable $action test container action
 * @return void
 */
function describe(string $description, callable $action): void {
    echo "📌 Describing {$description}:" . PHP_EOL;

    $action();
}


/**
 * add test
 * @function it
 * @param string $description test description
 * @param callable $action test action
 * @return void
 */
function it(string $description, callable $action) {
    echo "🧪️ Running {$description}:" . PHP_EOL;

    $action();
}