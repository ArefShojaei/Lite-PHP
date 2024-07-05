<?php

/**
 * @package
 */
import("@core/shared/hooks/useUpload/_validateFileExtention");
import("@core/shared/hooks/useUpload/_validateFileSize");


/**
 * Upload file
 * @function useUpload
 * @param array $file file data
 * @param array $ext list of valid file extentions
 * @param float|int $size file size in 'MB'
 * @return array
 */
function useUpload(array $file, array $ext = ['jpeg', 'jpg'], float|int $size = 2): array {
    $fileInfo = pathinfo($file['name']);
    
    // Validations
    _validateFileExtention($fileInfo["extension"], $ext);

    _validateFileSize($file['size'], $size);


    // Get full file path as dest path
    $distPath = buildPath(BASE_UPLOADS_PATH . "/", $fileInfo["filename"], "." . $fileInfo["extension"]);
    
    // Move to uploads folder by dist path
    $status = move_uploaded_file($file["tmp_name"], $distPath);


    return [
        "status" => $status,
        "message" => "File uploaded successfully"
    ];
}