<?php

/**
 * @package
 */
import("@core/helpers/view");


/**
 * Throw HTTP exception
 * @function abort
 * @param int $code Status code
 * @param string $message
 * @param array $data View data
 * @return void
 */
function abort(int $code, string $message, $data = []): void {
    # Set HTTP status code
    http_response_code($code);

    # Render template
    view("errors/{$code}", array_merge(["title" => $code, "message" => $message], $data));
}