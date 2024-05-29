<?php

/**
 * Validate assertion
 * @function _validateAssertion
 * @private
 * @param bool $result
 * @return void
 */
function _validateAssertion(bool $result): void {
    global $passedTests, $failedTests;

    # Check to not be valid result as falsly value
    if (!$result) {
        $failedTests++;

        echo "     ✖️  Failed test!.\n";
        return;
    }

    # Valid result
    $passedTests++;
    
    echo "     ✔️  Success test.\n";
}