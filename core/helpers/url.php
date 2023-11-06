<?php

/**
 * @desc current route
 * @function route
 * @return {string}
 */
function route(): string {
    return $_SERVER["REQUEST_URI"];
}