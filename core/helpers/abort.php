<?php

/**
 * @package
 */
import("@core/helpers/view");


/**
 * show error page
 * @param int $code status code
 * @param int $message
 * @return void
 */
function abort(int $code, string $message): void {
    http_response_code($code);

    view("errors/{$code}", ["title" => $code, "message" => $message]);
}