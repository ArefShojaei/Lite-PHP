<?php

function _setAttributes(array $attributes, string $translatedWord): string {
    $pattern = "/\:(?<attribute>\w+)/";

    return preg_replace_callback($pattern, function ($matches) use ($attributes) {
        $key = $matches["attribute"];

        return $attributes[$key];
    }, $translatedWord);
}