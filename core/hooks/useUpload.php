<?php

/**
 * Upload file
 * @function useUpload
 * @param array $file
 * @return bool
 */
function useUpload(array $file): bool {
    # Extract file info like name & ext
    $fileInfo = pathinfo($file['name']);

    # Build dest path
    $distPath = buildPath(BASE_UPLOADS_PATH . "/", $fileInfo["filename"], "." . $fileInfo["extension"]);

    # move the file
    return move_uploaded_file($file["tmp_name"], $distPath);
}