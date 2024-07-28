<?php

function _encryptView(string $path): array {
    $extractedViewPath = explode(".", $path);
    
    $viewName = end($extractedViewPath);
    
    $encryptedViewName = md5($viewName); 


    return [$encryptedViewName, $viewName];
}