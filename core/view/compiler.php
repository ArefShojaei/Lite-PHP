<?php

import("@core/shared/view/_getTemplateFiles");
import("@core/shared/view/_getTemplateContent");
import("@core/shared/view/_replaceTemplateDirective");
import("@core/shared/view/_replaceTemplateSyntax");
import("@core/hooks/useRecord");


function compileView(): void {
    $path = dirname(__DIR__, 2) . VIEWS_PATH;
    
    $files = _getTemplateFiles($path);

    foreach ($files as $file) {
        $content = _getTemplateContent($file);

        # Apply template directives and syntaxes
        $compiledTPL = _replaceTemplateDirective($content);
        
        $compiledTPL = _replaceTemplateSyntax($compiledTPL);
        
        # Minify template
        if(useMode() !== DEV_MODE) {
            $minifyedTPL = preg_replace("/\s{2,}/", " ", $compiledTPL);
            
            $compiledTPL = $minifyedTPL;
        }

        # Move compiled template to the storage/views
        $dirname = pathinfo($file)["dirname"]; 

        $extractedDirname = explode("/views", $dirname);

        $subFolder = end($extractedDirname);

        $filename = "views" . implode(".", explode("/", $subFolder)) . "." . pathinfo($file)['filename'];

        file_put_contents(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/" . md5($filename) . PHP_FILE_EXTENTION, $compiledTPL);
    }

    useRecord("timestamps", "view", time() + TIME_ONE_MINUTE);
}