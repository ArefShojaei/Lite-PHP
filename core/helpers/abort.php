<?php

import("@core/helpers/view");


/**
 * Throw HTTP error page
 * @param $data View data
 */
function abort(int $code, string $message, $data = []): void {
    # Set HTTP status code
    http_response_code($code);

    # Render template
    view("errors.{$code}", array_merge(["title" => $code, "message" => $message], $data));
}