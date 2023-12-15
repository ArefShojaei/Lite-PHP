<?php

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