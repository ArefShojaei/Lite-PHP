<?php

/**
 * @desc get userAgent
 * @function useAgent
 * @return {string}
 */
function useAgent(): string {
    return $_SERVER["HTTP_USER_AGENT"];
}