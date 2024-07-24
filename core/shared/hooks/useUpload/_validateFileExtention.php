<?php

function _validateFileExtention(string $fileExt, array $ext): array {
    if(!in_array($fileExt, $ext)) {
        return [
            "status" => false,
            "message" => "Invalid file extention!"
        ];
    }
}