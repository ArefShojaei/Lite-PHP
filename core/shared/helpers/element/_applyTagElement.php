<?php

/**
 * Create HTML tag element
 * @function _applyTagElement
 * @private
 * @param string $tag
 * @return string
 */
function _applyTagElement(string $tag): string {
    return "<{$tag}";
}