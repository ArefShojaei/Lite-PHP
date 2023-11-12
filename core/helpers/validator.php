<?php

/**
 * email validation
 * @function isEmail
 * @param string $email
 */
function isEmail(string $email): bool {
    $pattern = "/\b[^0-9]\w+@gmail.com\b/";

    preg_match($pattern, $email, $isMatch);

    return (bool) $isMatch;
}