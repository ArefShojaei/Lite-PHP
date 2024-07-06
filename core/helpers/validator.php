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