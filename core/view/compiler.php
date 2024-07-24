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


        $fileInfo = pathinfo($file);

        [$_, $folder] = explode("/views",$fileInfo['dirname']);


        if(!$folder) file_put_contents(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/" . $fileInfo['filename'] . PHP_FILE_EXTENTION, $compiledTPL);
        
        if(!is_dir(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/{$folder}")) mkdir(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/{$folder}");
        
        
        file_put_contents(dirname(__DIR__, 2) . COMPILED_VIEWS_PATH . "/{$folder}/" . $fileInfo['filename'] . PHP_FILE_EXTENTION, $compiledTPL);
    }
}