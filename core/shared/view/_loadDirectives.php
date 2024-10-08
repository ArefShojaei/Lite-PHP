<?php

function _loadDirectives(): void {
    $directives = glob(dirname(__DIR__, 2) . "/contracts/view/directives/*.php");

    foreach ($directives as $directive) {
        $filename = pathinfo($directive)['filename'];

        import("@core/contracts/view/directives/{$filename}");
    }
}