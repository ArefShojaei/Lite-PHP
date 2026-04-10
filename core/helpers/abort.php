<?php

import("@core/helpers/view");


/**
 * Throw HTTP error page
 * @param $data View data
 */
function abort(int $code, string $message, $data = []): string {
    http_response_code($code);

    return view("error.page", array_merge(["title" => $code, "message" => $message], $data));
}