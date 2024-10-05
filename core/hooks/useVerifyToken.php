<?php

import("@core/helpers/base64Url");


/**
 * Verify token
 */
function useVerifyToken(string $token, string $secretKey): array|bool|null {
    list($headerBase64Url, $payloadBase64Url, $signatureBase64Url) = explode(".", $token);

    $header = json_decode(decodeBase64Url($headerBase64Url));
    $payload = json_decode(decodeBase64Url($payloadBase64Url), true);


    if(!$header || !$payload) return null;
    
    $signature = decodeBase64Url($signatureBase64Url);
    $expectedSignature = hash_hmac(JWT_ALG, "{$headerBase64Url}.{$payloadBase64Url}", $secretKey, true);

    if ($signature !== $expectedSignature) return null;

    if (isset($payload['expireTime']) && $payload['expireTime'] < time()) return false;


    return $payload;
}