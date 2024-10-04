<?php

import("@core/helpers/base64Url");


function useVerifyToken(string $token, string $secretKey): array|bool|null {
    list($headerBase64Url, $payloadBase64Url, $signatureBase64Url) = explode(".", $token);

    $header = json_encode(decodeBase64Url($headerBase64Url));
    $payload = json_encode(decodeBase64Url($payloadBase64Url), true);
    
    if(!$header || $payload) return null;
    
    $signature = json_encode(decodeBase64Url($signatureBase64Url));
    $expectedSignature = hash_hmac(JWT_ALG, "{$headerBase64Url}.{$payloadBase64Url}", $secretKey, true);

    if ($signature !== $expectedSignature) return null;

    if (isset($payload['expireTime']) && $payload['expireTime'] < time()) return false;


    return $payload;
}