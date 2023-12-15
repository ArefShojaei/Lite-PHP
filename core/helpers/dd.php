<?php

/**
 * @package
 */
require_once "core/private/helpers/dd/_render.php";


/**
 * dump and die an Array
 * @function dd
 * @param array $input
 * @param bool $isDied
 * @return void
 */
function dd(array $input, bool $isDied = true): void {
    # declare styles as constant
    $styles = [
        "div" => "padding: 4px 8px;background-color: #202020;color: white;border-radius:4px;font-family: sans-serif",
        "p" => "color: #e5e5e5;",
        "strong" => "color: #37ff25;",
        "pre" => "color: #37ff25;",
    ];

    # call to render template
    echo _render([$input, $styles]);

    # exit process if the $isDied is true after rendering the template
    if($isDied) exit;
}