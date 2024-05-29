<?php

/**
 * @package
 */
import("@core/hooks/useConfig");
import("@core/hooks/useError");
import("@core/helpers/build");
import("@core/shared/helpers/translate/_setAttributes");


/**
 * Translate word
 * @function __
 * @param string $key
 * @param array $attributes
 * @return string
 */
function __(string $key, array $attributes = []): string {
    list($filename, $key) = explode(".", $key);

    # Current locale
    $locale = useConfig("app.locale") ?? useConfig("app.fallback_locale");

    # The locale file path
    $file = buildPath(BASE_LANG_PATH . "/{$locale}", "/{$filename}");

    # Check to exist the locale file
    if (!file_exists($file)) useError("The '{$file}' doesn't exist!");

    # Parsed locale words
    $parsedLocaleWords = require $file;

    # Get translated word as "value" by key
    $translatedWord = $parsedLocaleWords[$key];

    # Get the value if attributes doesn't exist!
    if (!count($attributes)) return $translatedWord;

    # Set the attributes
    return _setAttributes($attributes, $translatedWord);
}