<?php

function _applyChildren(string &$element, array $children): void {
    foreach ($children as $child) {
        $element .= "{$child}";
    }
}