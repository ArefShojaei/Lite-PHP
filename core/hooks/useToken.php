<?php

import("@core/helpers/base64Url");


/**
 * Generate token (JWT)
 */
function useToken(array $payload, string $secretKey, int $expireTime = 3600): string {
    # 1-Header section
    $header = json_encode(JWT_HEADER);
    $headerBase64Url = encodeBase64Url($header);

    # Set expire time
    $payload["expireTime"] = time() + $expireTime;
    
    # 2-Payload (body) section
    $payload = json_encode($payload);
    $payloadBase64Url = encodeBase64Url($payload);

    # 3-Signature section
    $signature = hash_hmac(JWT_ALG, "{$headerBase64Url}.{$payloadBase64Url}", $secretKey, true);
    $signatureBase64Url = encodeBase64Url($signature);


    return "{$headerBase64Url}.{$payloadBase64Url}.{$signatureBase64Url}";
}