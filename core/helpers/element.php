<?php

/**
 * create HTML tag
 * @function _applyTagElement
 * @private
 * @param string $tag
 * @return string
 */
function _applyTagElement(string $tag): string {
    return "<{$tag}";
}

/**
 * add attributes to the element
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




/**
 * create single HTML element
 * @function createSingleElement
 * @param string $tag
 * @param array $attributes
 * @return string
 */
function createSingleElement(string $tag, array $attributes): string {
    # open the tag
    $element = _applyTagElement($tag);
    
    # add attributes
    if(count($attributes)) _applyAttributes($element, $attributes);

    # close the tag
    $element .= " />";
    
    # return the element
    return $element;
}


/**
 * create HTML element
 * @function createElement
 * @param string $tag
 * @param array $attributes
 * @param array $children
 * @return string
 */
function createElement(string $tag, array $attributes, array $children): string {
    # open the tag
    $element = _applyTagElement($tag);

    # add attributes
    if (count($attributes)) _applyAttributes($element, $attributes);

    # close the before tag
    $element .= ">";

    # add children
    if (count($children)) _applyChildren($element, $children);

    # close the after tag
    $element .= "</{$tag}>";
    
    # return the element
    return $element;
}