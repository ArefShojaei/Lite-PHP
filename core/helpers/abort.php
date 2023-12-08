<?php

/**
 * @package
 */
import("@core/helpers/view");


/**
 * show error page
 * @param int $code status code
 * @param string $message
 * @param array $data view data
 * @return void
 */
function abort(int $code, string $message, $data = []): void {
    http_response_code($code);

    view("errors/{$code}", array_merge(["title" => $code, "message" => $message], $data));
}