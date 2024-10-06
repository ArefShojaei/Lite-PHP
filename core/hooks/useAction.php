<?php

import("@core/hooks/useRecord");


/**
 * Save action in local database
 */
function useAction(string $name): void {
    $table = "actions";

    $currentTimestamp = time();

    useRecord($table, strtoupper($name), $currentTimestamp);
}