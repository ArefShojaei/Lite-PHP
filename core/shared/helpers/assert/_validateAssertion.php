<?php

/**
 * validate assertion
 * @function _validateAssertion
 * @private
 * @param bool $result
 * @return void
 */
function _validateAssertion(bool $result): void {
    global $passed, $failed;

    # is not valid result as falsly value
    if (!$result) {
        $failed++;

        echo "     ✖️  Failed test!.\n";
        return;
    }

    # valid result
    $passed++;
    echo "     ✔️  Success test.\n";
}