<?php

/**
 * @package
 */
require_once dirname(__DIR__) . "/shared/helpers/element/_applyAttributes.php";
require_once dirname(__DIR__) . "/shared/helpers/element/_applyChildren.php";
require_once dirname(__DIR__) . "/shared/helpers/element/_applyTagElement.php";


/**
 * Create single HTML element
 * @function createSingleElement
 * @param string $tag
 * @param array $attributes
 * @return string
 */
function createSingleElement(string $tag, array $attributes): string {
    # Open the tag
    $element = _applyTagElement($tag);

    # Add attributes
    if (count($attributes)) _applyAttributes($element, $attributes);

    # Close the tag
    $element .= " />";

    # Get the element as output
    return $element;
}


/**
 * Create HTML element
 * @function createElement
 * @param string $tag
 * @param array $attributes
 * @param array $children
 * @return string
 */
function createElement(string $tag, array $attributes, array $children): string {
    # Open the tag
    $element = _applyTagElement($tag);

    # Add attributes
    if (count($attributes)) _applyAttributes($element, $attributes);

    # Close the before tag
    $element .= ">";

    # Add children
    if (count($children)) _applyChildren($element, $children);

    # Close the after tag
    $element .= "</{$tag}>";

    # Get the element as output
    return $element;
}