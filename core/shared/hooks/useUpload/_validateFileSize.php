<?php

/**
 * Validate file size
 * @function _validateFileSize
 * @param int $fileSize
 * @param int|float $size
 * @return array
 */
function _validateFileSize(int $fileSize, int|float $size): array {
    // Size types
    $KB_SIZE = 1024;
    $MB_SIZE = 1024;

    // file size in MB
    $fileSize = number_format($fileSize / ($KB_SIZE * $MB_SIZE), 2);


    if($fileSize > $size) {
        return [
            "status" => false,
            "message" => "Invalid file size!"
        ];
    }
}