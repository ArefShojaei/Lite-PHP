<?php

require_once dirname(__DIR__) . "/shared/helpers/dd/_render.php";


/**
 * Dump and Die an Array
 */
function dd(array $input, bool $isDied = true): void {
    $styles = [
        "div" => "padding: 8px 12px;background-color: #202020;color: white;border-radius:4px;font-family: sans-serif; overflow-x: scroll;",
        "p" => "color: #e5e5e5;",
        "strong" => "color: #37ff25;",
        "pre" => "color: #37ff25;",
    ];

    # Render HTML template
    echo _render([$input, $styles]);

    # Stop process
    if ($isDied) exit;
}