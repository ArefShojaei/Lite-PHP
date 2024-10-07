<?php

import("@core/shared/view/_loadDirectives");
import("@core/view/compiler");
import("@core/hooks/useTable");


function runViewEngine(): void {
    _loadDirectives();

    $lastViewTimestamp = useTable("timestamps", "view");

    $currentTimestamp = time();


    # Render view
    if (!$lastViewTimestamp) {
        compileView();

        return;
    }

    # Rerender view
    if ($lastViewTimestamp < $currentTimestamp) compileView();
}