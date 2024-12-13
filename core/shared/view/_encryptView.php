<?php

function _encryptView(string $path): array {
    $extractedViewPath = explode(".", $path);
    
    if(count($extractedViewPath) < 2) array_unshift($extractedViewPath, "views");

    $viewName = current($extractedViewPath) . "_" . end($extractedViewPath);
    
    $encryptedViewName = md5($viewName); 


    return [$encryptedViewName, $viewName];
}