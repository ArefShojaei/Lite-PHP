<?php

function _cleanStorageFile(string $folder, string $message): void {
    $pattern = dirname(__DIR__, 3) . "/storage/{$folder}/*";

    $files = glob($pattern);

    if (!count($files)) die("All {$message} files already deleted!");

    foreach ($files as $file) {
        echo "[INFO] Deleteing \"{$file}\" {$message} file..." . PHP_EOL;
        
        unlink($file);
    }

    echo "[INFO] All {$message} files has been deleted.";
}