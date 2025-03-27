<?php

import("@core/helpers/view");


/**
 * Throw HTTP error page
 * @param $data View data
 */
function abort(int $code, string $message, $data = []): string {
    # Set HTTP status code
    http_response_code($code);

    # Render template
    return view("error.page", array_merge(["title" => $code, "message" => $message], $data));
}