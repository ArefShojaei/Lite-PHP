<?php

import("@core/hooks/useState");


function directive(string $name, callable $callback, $hasExpression = false): void {
    $state = [
        "action" => $callback,
        "hasExpression" => $hasExpression
    ];
    
    useState("template.directives.@{$name}", $state);
}

function directiveSyntax(string $start, string $end, callable $callback): void {
    useState("template.syntaxes.{$start} variable {$end}", $callback);
}