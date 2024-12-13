<?php

import("@core/shared/view/_getTemplateFiles");
import("@core/shared/view/_getTemplateContent");
import("@core/shared/view/_replaceTemplateDirective");
import("@core/shared/view/_replaceTemplateSyntax");
import("@core/hooks/useRecord");


function compileView(): void {
    $files = _getTemplateFiles();

    foreach ($files as $file) {
        $content = _getTemplateContent($file);

        $compiledTPL = _replaceTemplateDirective($content);
        
        $compiledTPL = _replaceTemplateSyntax($compiledTPL);
        
        
        if(useMode() !== DEV_MODE) {
            $minifyedTPL = preg_replace("/\s{2,}/", " ", $compiledTPL);
            
            $compiledTPL = $minifyedTPL;
        }
        
        
        $dirname = pathinfo($file)["dirname"]; 

        $extractedDirname = explode("/", $dirname);
        
        
        $subFolder = end($extractedDirname);
        
        $filename = $subFolder . "_" . pathinfo($file)['filename'];

        file_put_contents(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/" . md5($filename) . PHP_FILE_EXTENTION, $compiledTPL);
    }

    useRecord("timestamps", "view", time() + TIME_ONE_MINUTE);
}