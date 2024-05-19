<?php

/**
 * add elements as children to the element
 * @function _applyChildren
 * @private
 * @param string $element
 * @param array $children
 * @return void
 */
function _applyChildren(&$element, $children): void {
    foreach ($children as $child) {
        $element .= "{$child}";
    }
}