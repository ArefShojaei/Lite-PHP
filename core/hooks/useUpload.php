<?php

/**
 * upload file
 * @function useUpload
 * @param array $file
 * @return bool
 */
function useUpload(array $fileInfo): bool {
    return move_uploaded_file($fileInfo["tmp_name"], BASE_UPLOADS_PATH . "/{$fileInfo['name']}");
}