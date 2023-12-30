<?php

/**
 * @package
 */
import("@core/hooks/useConfig");
import("@core/hooks/useError");
import("@core/helpers/build");
import("@core/private/helpers/__/_setAttributes");


/**
 * translate word
 * @function __
 * @param string $key
 * @param array $attributes
 * @return string
 */
function __(string $key, array $attributes = []): string {
    list($filename, $key) = explode(".", $key);

    # current locale
    $locale = useConfig("app.locale") ?? useConfig("app.fallback_locale");

    # the locale file path
    $file = buildPath("lang/{$locale}", "/{$filename}");
    
    # check to exist the locale file
    if(!file_exists($file)) useError("The '{$file}' doesn't exist!");
    
    # parsed locale words
    $parsedLocaleWords = require $file;
    
    # get translated word as "value" by key
    $translatedWord = $parsedLocaleWords[$key];

    # return the value if attributes doesn't exist!
    if (!count($attributes)) return $translatedWord;

    # set the attributes
    return _setAttributes($attributes, $translatedWord);
}