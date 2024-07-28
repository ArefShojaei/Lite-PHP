<?php

import("@core/shared/view/_getTemplateFiles");
import("@core/shared/view/_getTemplateContent");
import("@core/shared/view/_replaceTemplateDirective");
import("@core/shared/view/_replaceTemplateSyntax");


function compileView(): void {
    $files = _getTemplateFiles();

    foreach ($files as $file) {
        $content = _getTemplateContent($file);

        $compiledTPL = _replaceTemplateDirective($content);
        
        $compiledTPL = _replaceTemplateSyntax($compiledTPL);
        
        $compiledTPL = preg_replace("/\s{2,}/", "", $compiledTPL);


        $filename = pathinfo($file)['filename'];

        file_put_contents(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/" . md5($filename) . PHP_FILE_EXTENTION, $compiledTPL);
    }
}