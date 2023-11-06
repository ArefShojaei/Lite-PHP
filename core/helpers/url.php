<?php

/**
 * @desc current route
 * @function route
 * @return {string}
 */
function route(): string {
    return $_SERVER["REQUEST_URI"];
}

/**
 * @desc current host
 * @function host
 * @return {string}
 */
function host(): string {
    return $_SERVER["HTTP_HOST"];
}