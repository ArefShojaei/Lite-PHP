<?php

import("@core/shared/hooks/useUpload/_validateFileExtention");
import("@core/shared/hooks/useUpload/_validateFileSize");


/**
 * Upload file
 * @param $file file data
 * @param $ext list of valid file extentions
 * @param $size file size in 'MB'
 */
function useUpload(array $file, array $ext = ['jpeg', 'jpg'], float|int $size = 2): array {
    $fileInfo = pathinfo($file['name']);
    
    _validateFileExtention($fileInfo["extension"], $ext);

    $fileSizeValidationResult = _validateFileSize($file['size'], $size);

    if (count($fileSizeValidationResult)) return $fileSizeValidationResult;
    

    $distPath = buildPath(UPLOADS_PATH . "/", $fileInfo["filename"], "." . $fileInfo["extension"]);
    
    # Move to uploads folder by dist path
    $status = move_uploaded_file($file["tmp_name"], $distPath);


    return [
        "status" => $status,
        "message" => "File uploaded successfully"
    ];
}