<?php

function setCustomException(object $exception): void {
    $exceptionData = (array) $exception;

    # Define prefix to access private property in the exception data
    $prefix = chr(0) . "*" . chr(0);

    $exception = [
        "title" => "Exception",
        "message" => $exceptionData[$prefix . "message"],
        "file" => $exceptionData[$prefix . "file"],
        "line" => $exceptionData[$prefix . "line"],
        "meta" => [
            "scriptContent" => explode("\r", htmlspecialchars(file_get_contents($exceptionData[$prefix . "file"]))),
            "beforeScriptLines" => $exceptionData[$prefix . "line"] - 5,
            "afterScriptLines" => $exceptionData[$prefix . "line"] + 5,
        ]
    ];

    extract($exception);

    require_once __DIR__ . "/templates/exception.php";

    exit;
}