<?php

/**
 * Set custom Error handler
 * @function setCustomError
 * @param int $type Error type 
 * @param string $message Error message 
 * @param string $file Target file  
 * @param int $line Target line
 * @return void
 */
function setCustomError(int $type, string $message, string $file, int $line): void {
    # Declare Error report data
    $errorReport = [
        "title" => "Error",
        "type" => $type,
        "message" => $message,
        "file" => $file,
        "line" => $line,
    ];

    # Set HTTP status code
    http_response_code(500);

    # Extract the Error data to use in template
    extract($errorReport);

    # Render template
    require_once __DIR__ . "/templates/error.php";

    # Stop proccess
    exit;
}