<?php

/**
 * email validation
 * @function isEmail
 * @param string $email
 */
function isEmail(string $email): bool {
    # declare pattern
    $pattern = "/\b[^0-9].+@gmail.com\b/";

    # get matches for the pattern
    preg_match($pattern, $email, $isMatch);

    # return the $isMatch as boolean
    return (bool) $isMatch;
}

/**
 * url validation
 * @function isEmail
 * @param string $email
 */
function isURL(string $url): bool {
    # declare pattern
    $pattern = "/\b(http|https):\/\/.*\b/";

    # get matches for the pattern
    preg_match($pattern, $url, $isMatch);

    # return the $isMatch as boolean
    return (bool) $isMatch;
}