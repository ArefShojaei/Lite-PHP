<?php

/**
 * @package
 */
require_once dirname(__DIR__, 3) . "/helpers/element.php";


/**
 * Render template to show info by params
 * @function _render
 * @private
 * @param array $params
 * @return string
 */
function _render(array $params): string {
    list($input, $styles) = $params; 

    # Element structure
    return createElement("div", ["style" => $styles['div']], [
        # <p> element
        createElement("p", ["style" => $styles['p']], [
            "Count:&nbsp;",
        
            # <strong> element
            createElement("strong", ["style" => $styles["strong"]], [count($input)])
        ]),
        
        # <hr> element
        createSingleElement("hr", []),

        # <pre> element
        createElement("pre", ["style" => $styles['pre']], [print_r($input, true)]),
    ]);
}