<?php

function _loadDirectives(): void {
    $directives = glob(dirname(__DIR__, 2) . "/view/directives/*.php");

    foreach ($directives as $directive) {
        $filename = pathinfo($directive)['filename'];

        import("@core/view/directives/{$filename}");
    }
}