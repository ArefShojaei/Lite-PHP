<?php

/**
 * Add attributes to the element
 * @function _applyAttributes
 * @private
 * @param string $element
 * @param array $attributes
 * @return void
 */
function _applyAttributes(string &$element, array &$attributes): void {
    foreach ($attributes as $attribute => $value) {
        $element .= " {$attribute}='{$value}'";
    }
}