<?php

function _encryptView(string $view): array {
    $viewName = "views." . $view;

    $encryptedViewName = md5($viewName); 

    return [$encryptedViewName, $viewName];
}