<?php

/**
 * @package
 */
require_once "core/helpers/element.php";


/**
 * render template to show $input info
 * @function _render
 * @private
 * @param array $params
 * @return string
 */
function _render(array $params): string {
    list($input, $styles) = $params; 

    return createElement("div", ["style" => $styles['div']], [
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
}


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