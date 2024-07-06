<?php

/**
 * @private
 */
function _validateFileSize(int $fileSize, int|float $size): array {
    # File size types
    $KB_SIZE = 1024;
    $MB_SIZE = 1024;

    # File size in MB
    $fileSize = number_format($fileSize / ($KB_SIZE * $MB_SIZE), 2);


    if($fileSize > $size) {
        return [
            "status" => false,
            "message" => "Invalid file size!"
        ];
    }
}