<?php

import("@core/hooks/useGlobal");


function _replaceTemplateSyntax(string $content) {
    $syntaxes = useGlobal("template.syntaxes");

    return preg_replace_callback("/{{!--\s*(?<comment>.+)\s*--}}|{{{\s*(?<unEscaped>.+)\s*}}}|{{\s*(?<espaced>.+)\s*}}/", function($matches) use ($syntaxes) {
        $pattern = current($matches);


        if(str_starts_with($pattern, "{{!--")) {
            $key = "{{!-- variable --}}";
            
            $action = $syntaxes[$key];

            return call_user_func($action, $matches['comment']);
        }
        
        if(str_starts_with($pattern, "{{{")) {
            $key = "{{{ variable }}}";
            
            $action = $syntaxes[$key];

            return call_user_func($action, $matches['unEscaped']);
        }
        
        if(str_starts_with($pattern, "{{")) {
            $key = "{{ variable }}";
            
            $action = $syntaxes[$key];

            return call_user_func($action, $matches['espaced']);
        }

    }, $content);

}