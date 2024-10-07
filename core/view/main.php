<?php

import("@core/shared/view/_loadDirectives");
import("@core/view/compiler");
import("@core/hooks/useTable");
import("@core/hooks/useMode");


function runViewEngine(): void {
    _loadDirectives();

    $lastViewTimestamp = useTable("timestamps", "view");

    $currentTimestamp = time();


    # -------------------------------- #
    #            States                #
    # -------------------------------- #
    
    # Render view every time
    if (useMode() !== PROD_MODE) {
        compileView();

        return;
    }

    # Render view at the first time
    if (!$lastViewTimestamp) {
        compileView();

        return;
    }

    # Rerender view after expired timestamp
    if ($lastViewTimestamp < $currentTimestamp) compileView();
}