<?php

function _validateAssertion(bool $result): void {
    global $passedTests, $failedTests;

    # Is not valid result
    if (!$result) {
        $failedTests++;

        echo "     ✖️  Failed test!.\n";
        return;
    }

    # Valid result
    $passedTests++;
    
    echo "     ✔️  Success test.\n";
}