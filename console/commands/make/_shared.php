<?php

/**
 * Get file path info in a DIR 
 * @function _getPathInfo
 * @param string $DIR
 * @param string $filename
 * @return void
 */
function _getPathInfo(string $DIR, string $filename = MAIN_EXECUTABLE_FILE): array {
    # Filename + file ext
    $file = $filename . PHP_FILE_EXTENTION;

    # Full file path
    $src = "{$DIR}/{$file}";


    return [$src, $DIR];
}


/**
 * Check file if it exists
 * @function _checkFileToExist
 * @param string $src
 * @param string $filename
 * @param string $tag
 * @return bool
 */
function _checkFileToExist(string $src, string $filename, string $tag): bool {
    if(file_exists($src)) {
        echo "\"{$filename}\" {$tag} already exists!";
    
        return true;
    }

    return false;
}


/**
 * Make file by src
 * @function _makeFile
 * @param string $src
 * @param string $content
 * @return void
 */
function _makeFile(string $src, string $content): void {
    file_put_contents($src, $content);
}


/**
 * Make files by input
 * @function _makeFile
 * @param array $files
 * @return void
 */
function _makeFiles(array $files): void {
    foreach ($files as $src => $content) {
        _makeFile($src, $content);
    }
}


/**
 * Show message after completed task
 * @function _showCompletedTaskMessage
 * @param string $tag
 * @param string $DIR
 * @return void
 */
function _showCompletedTaskMessage(string $tag, string $DIR): void {
    echo ucfirst($tag) . " maked successfully." . PHP_EOL;
    
    echo "Move to \"{$DIR}\"";
}