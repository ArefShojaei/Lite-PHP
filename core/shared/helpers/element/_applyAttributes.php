<?php

/**
 * @private
 */
function _applyAttributes(string &$element, array &$attributes): void {
    foreach ($attributes as $attribute => $value) {
        $element .= " {$attribute}='{$value}'";
    }
}