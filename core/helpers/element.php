<?php

/**
 * @package
 */
require_once "core/shared/helpers/element/_applyAttributes.php";
require_once "core/shared/helpers/element/_applyChildren.php";
require_once "core/shared/helpers/element/_applyTagElement.php";


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
    if (count($attributes)) _applyAttributes($element, $attributes);

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