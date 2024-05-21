<?php

/**
 * set word attributes
 * @function _setAttributes
 * @private
 * @param array $attributes
 * @param string $translatedWord
 * @return string
 */
function _setAttributes(array $attributes, string $translatedWord): string {
    # decalre regex pattern
    $pattern = "/\:(?<attribute>\w+)/";

    # set attributes
    return preg_replace_callback($pattern, function ($matches) use ($attributes) {
        $key = $matches["attribute"];

        return $attributes[$key];
    }, $translatedWord);
}