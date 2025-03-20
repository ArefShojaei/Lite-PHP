<?php

function _validateFileSize(int $fileSize, int|float $size): array {
    # File size types
    $KB_CONST_SIZE = 1024;
    $MB_CONST_SIZE = $KB_CONST_SIZE;

    # File size in MB
    $fileSize = number_format($fileSize / ($KB_CONST_SIZE * $MB_CONST_SIZE), 2);


    if($fileSize > $size) {
        return [
            "status" => false,
            "message" => "Invalid file size!"
        ];
    }

    return [];
}