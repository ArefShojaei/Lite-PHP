<?php

function _getTemplateFiles(int $maxDeepLevel = 7): array {
    $files = [];
    
    $separator = "/*";


    for ($count = 0; $count < $maxDeepLevel; $count++) {
        $pattern = dirname(__DIR__, 3) . VIEWS_PATH . $separator . VIEW_FILE_EXTENTION;
        
        $separator .= $separator;

        $files = array_merge($files, glob($pattern));
    }

    
    return $files;
}