<?php

/**
 * @package
 */
require_once dirname(__DIR__) . "/shared/helpers/dd/_render.php";


/**
 * Dump and Die an Array
 * @function dd
 * @param array $input
 * @param bool $isDied
 * @return void
 */
function dd(array $input, bool $isDied = true): void {
    # Declare styles as constant
    $styles = [
        "div" => "padding: 8px 12px;background-color: #202020;color: white;border-radius:4px;font-family: sans-serif; overflow-x: scroll;",
        "p" => "color: #e5e5e5;",
        "strong" => "color: #37ff25;",
        "pre" => "color: #37ff25;",
    ];

    # Render template
    echo _render([$input, $styles]);

    # Exit process if the $isDied is true after rendering the template
    if ($isDied) exit;
}