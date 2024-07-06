<?php

function setCustomError(int $type, string $message, string $file, int $line): void {
    $error = [
        "title" => "Error",
        "type" => $type,
        "message" => $message,
        "file" => $file,
        "line" => $line,
        "meta" => [
            "scriptContent" => explode("\r", htmlspecialchars(file_get_contents($file))),
            "beforeScriptLines" => $line - 5,
            "afterScriptLines" => $line + 5,
        ]
    ];

    # Set HTTP status code
    http_response_code(500);

    # Extract data to use in view as template engine
    extract($error);

    # Render template
    require_once __DIR__ . "/templates/error.php";

    # Stop process
    exit;
}