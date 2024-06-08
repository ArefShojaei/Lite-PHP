<?php

/**
 * Set custom Exception handler
 * @function setCustomException
 * @param object $exception
 * @return void 
 */
function setCustomException(object $exception): void {
    # Convert to Array Exception data
    $exception = (array) $exception;

    # Define prefix to access private property in the exception data
    $prefix = chr(0) . "*" . chr(0);

    # Decalre Exception report data
    $exceptionReport = [
        "title" => "Exception",
        "message" => $exception[$prefix . "message"],
        "file" => $exception[$prefix . "file"],
        "line" => $exception[$prefix . "line"],
        "meta" => [
            "scriptContent" => explode("\r", htmlspecialchars(file_get_contents($exception[$prefix . "file"]))),
            "beforeScriptLines" => $exception[$prefix . "line"] - 5,
            "afterScriptLines" => $exception[$prefix . "line"] + 5,
        ]
    ];

    # Extract the Exception data to use in template
    extract($exceptionReport);

    # Render template
    require_once __DIR__ . "/templates/exception.php";

    # Stop proccess
    exit;
}