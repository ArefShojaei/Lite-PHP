<?php

function _getTemplateFiles(): array {
    $rootTPL = glob(dirname(__DIR__, 3) . VIEWS_PATH . "/*" . VIEW_FILE_EXTENTION);
    $subRootTPL = glob(dirname(__DIR__, 3) . VIEWS_PATH . "/*/*" . VIEW_FILE_EXTENTION);
    
    return [...$rootTPL, ...$subRootTPL];
}