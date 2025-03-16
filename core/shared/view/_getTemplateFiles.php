<?php

function _getTemplateFiles(string $path): array {
    static $files = [];

    $folders = scandir($path);

    array_shift($folders);
    array_shift($folders);

    foreach ($folders as $folder) {
        $nestedFolder = $path . "/" . $folder;
        
        if (is_dir($nestedFolder)) _getTemplateFiles($nestedFolder);

        if (!preg_match("/\.hbs/", $nestedFolder)) continue;
    
        $files[] = $nestedFolder;
    }

    return $files;
}