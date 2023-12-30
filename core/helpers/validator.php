<?php

/**
 * @package
 */
import("@core/hooks/useMatch");


/**
 * email validation
 * @function isEmail
 * @param string $email
 * @return bool
 */
function isEmail(string $email): bool {
    # declare pattern
    $pattern = "/\b[^0-9].+@gmail.com\b/";

    # get matches for the pattern
    $isMatch = useMatch($pattern, $email);

    # return the $isMatch as boolean
    return (bool) $isMatch;
}

/**
 * url validation
 * @function isEmail
 * @param string $email
 * @return bool
 */
function isURL(string $url): bool {
    # declare pattern
    $pattern = "/\b(http|https):\/\/.*\b/";

    # get matches for the pattern
    $isMatch = useMatch($pattern, $url);

    # return the $isMatch as boolean
    return (bool) $isMatch;
}