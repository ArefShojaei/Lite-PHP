<?php

import("@core/shared/view/_loadDirectives");
import("@core/view/compiler");


function runViewEngine(): void {
    _loadDirectives();

    compileView();
}