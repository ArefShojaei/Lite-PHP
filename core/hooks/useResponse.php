<?php

/**
 * @desc response http
 * @function useResponse
 * @param {string} $name
 * @param {string|array} $value
 * @return {mixed}
 */
function useResponse(string $name, string|array $value=null): mixed {
    function type(string $mimeType): void {
        header("Content-Type: {$mimeType}");
    }

    function json($value): string {
        type("application/json");

        return json_encode($value);
    }

    function html($value): string {
        type("text/html");

        echo $value;
    }

    function text($value): string {
        type("text/plain");
        
        echo $value;
    }

    return $name($value);
}