<?php

function encodeBase64Url(mixed $data): string {
    $base64 = base64_encode($data);

    return str_replace(["=", "+", "/"], ["", "-", "_"], $base64);
}

function decodeBase64Url(mixed $data): string {
    $base64 = str_replace(["-", "_"], ["+", "/"], $data);

    return base64_decode($base64);
}