<?php

/**
 * @package
 */
require_once "core/helpers/element.php";


/**
 * dump and die an Array
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


    # -- Start Element --
        # div element
        echo createElement("div", ["style" => $styles['div']], [
            # p element
            createElement("p", ["style" => $styles['p']], [
                "Count:&nbsp;",
            
                # strong element
                createElement("strong", ["style" => $styles["strong"]], [count($input)])
            ]),
            
            # hr element
            createSingleElement("hr", []),

            # pre element
            createElement("pre", ["style" => $styles['pre']], [print_r($input, true)]),
        ]);
    # -- End Element --


    # exit process if the $isDied is true
    if($isDied) exit;
}