<?php

/**
 * @package
 */
import("@core/helpers/view");


/**
 * throw HTTP exception
 * @function abort
 * @param int $code status code
 * @param string $message
 * @param array $data view data
 * @return void
 */
function abort(int $code, string $message, $data = []): void {
    # set HTTP status code
    http_response_code($code);

    # render template
    view("errors/{$code}", array_merge(["title" => $code, "message" => $message], $data));
}