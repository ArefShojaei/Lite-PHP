<?php

function _getPathInfo(string $DIR, string $filename = MAIN_EXECUTABLE_FILE): array {
    $file = $filename . PHP_FILE_EXTENTION;

    $src = "{$DIR}/{$file}";

    return [$src, $DIR];
}

function _checkFileToExist(string $src, string $filename, string $tag): bool {
    if(file_exists($src)) {
        echo "[WARNING] \"{$filename}\" {$tag} already exists!";
    
        return true;
    }

    return false;
}

function _makeFile(string $src, string $content): void {
    file_put_contents($src, $content);
}

function _makeFiles(array $files): void {
    foreach ($files as $src => $content) {
        _makeFile($src, $content);
    }
}

function _showCompletedTaskMessage(string $tag, string $DIR): void {
    echo "[INFO] " . ucfirst($tag) . " maked successfully." . PHP_EOL;
    
    echo "> Move to \"{$DIR}\"";
}

function _getBaseCommandTemplatesPath(): string {
    return "console/commands/make/templates";
}