<?php

import("@core/hooks/useGlobal");


function _replaceTemplateDirective(string $content): string {
    $directives = useGlobal("template.directives");

    return preg_replace_callback("/(?<directive>\@\w+)\s*\((?<expression>.+)\)|(?<singleDirective>\@\w+)/", function($matches) use ($directives) {
        $key = $matches["singleDirective"] ?? $matches["directive"];

        $directive = $directives[$key] ?? false;

        if (!$directive) return $key;

        return $directive['hasExpression'] ? call_user_func($directive['action'], $matches['expression']) : call_user_func($directive['action']);
    }, $content);
}