<?php

import("@core/hooks/useMatch");


function isEmail(string $email): bool {
    $pattern = "/\b[^0-9].+@gmail.com\b/";

    $isMatch = useMatch($pattern, $email);

    return (bool) $isMatch;
}

function isURL(string $url): bool {
    $pattern = "/\b(http|https):\/\/.*\b/";

    $isMatch = useMatch($pattern, $url);

    return (bool) $isMatch;
}

function validateSignedRoute(string $route, string $secretKey): bool {
    $parsedURL = parse_url($route);

    parse_str($parsedURL["query"], $query);

    # Validate query params and expire-time
    if (isset($query) && time() > $query["expireTime"]) return false;


    $signature = $query["signature"];
    
    unset($query["signature"]);

    
    $query = http_build_query($query);

    # Compare signatures together
    $expectedSignature = hash_hmac("sha256", $query, $secretKey);


    return hash_equals($signature, $expectedSignature);
}