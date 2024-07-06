<?php

import("@core/hooks/useConfig");
import("@core/hooks/useError");
import("@core/helpers/build");
import("@core/shared/helpers/translate/_setAttributes");


/**
 * Translate word
 */
function __(string $key, array $attributes = []): string {
    list($filename, $key) = explode(".", $key);

    $locale = useConfig("app.locale") ?? useConfig("app.fallback_locale");

    
    $filePath = buildPath(LANG_PATH . "/{$locale}", "/{$filename}");

    if (!file_exists($filePath)) useError("'{$filePath}' doesn't exist!");

    $parsedLocaleWords = require $filePath;


    $translatedWord = $parsedLocaleWords[$key];

    if (!count($attributes)) return $translatedWord;


    return _setAttributes($attributes, $translatedWord);
}