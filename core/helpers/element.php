<?php

/**
 * create HTML tag
 * @param string $tag
 * @return string
 */
function _applyTagElement(string $tag): string {
    return "<{$tag}";
}

/**
 * add attributes to the element
 * @param string $element
 * @param array $attributes
 * @return void
 */
function _applyAttributes(string &$element, array &$attributes): void {
    foreach ($attributes as $attribute => $value) {
        $element .= " {$attribute}='{$value}'";
    }
}

/**
 * add elements as children to the element
 * @param string $element
 * @param array $children
 * @return void
 */
function _applyChildren(&$element, $children): void {
    foreach ($children as $child) {
        $element .= "{$child}";
    }
}




/**
 * create single HTML element
 * @param string $tag
 * @param array $attributes
 * @return string
 */
function createSingleElement(string $tag, array $attributes): string {
    $element = _applyTagElement($tag);
    
    if(count($attributes)) {
        foreach ($attributes as $attribute => $value) {
            $element .= " {$attribute}='{$value}'";
        }
    }

    $element .= " />";
    
    return $element;
}


/**
 * create HTML element
 * @param string $tag
 * @param array $attributes
 * @param array $children
 * @return string
 */
function createElement(string $tag, array $attributes, array $children): string {
    $element = _applyTagElement($tag);

    if (count($attributes)) _applyAttributes($element, $attributes);

    $element .= ">";

    if (count($children)) _applyChildren($element, $children);

    $element .= "</{$tag}>";

    return $element;
}