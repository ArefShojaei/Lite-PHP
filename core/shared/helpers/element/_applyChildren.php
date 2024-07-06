<?php

/**
 * @private
 */
function _applyChildren(&$element, $children): void {
    foreach ($children as $child) {
        $element .= "{$child}";
    }
}