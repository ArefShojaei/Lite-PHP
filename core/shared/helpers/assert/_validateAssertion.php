<?php

/**
 * validate assertion
 * @function _validateAssertion
 * @private
 * @param bool $result
 * @return void
 */
function _validateAssertion(bool $result): void {
    global $passedTests, $failedTests;

    # is not valid result as falsly value
    if (!$result) {
        $failedTests++;

        echo "     ✖️  Failed test!.\n";
        return;
    }

    # valid result
    $passedTests++;
    echo "     ✔️  Success test.\n";
}