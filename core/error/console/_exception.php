<?php

require_once dirname(__DIR__, 2) . "/helpers/table.php";


function setCustomException(object $exception): void {
    $exceptionData = (array) $exception;

    # Define prefix to access private property in the exception data
    $prefix = chr(0) . "*" . chr(0);

    $exception = [
        "title" => "Exception",
        "message" => $exceptionData[$prefix . "message"],
        "file" => $exceptionData[$prefix . "file"],
        "line" => $exceptionData[$prefix . "line"],
    ];

    $extractedMessage = explode(": ", $exception["message"]);

    
    # Table structure
    $tableLength = 85; 

    createTable(function () use ($exception, $extractedMessage, $tableLength) {
        echo addRow("PHP {$exception['title']} Reporter", length: $tableLength);
        echo addSeparator(length:$tableLength);
        echo addColumn("File: {$exception['file']}", length:$tableLength - 5) . addColumn("Line: {$exception['line']}", STR_PAD_BOTH, $tableLength - 71) . "|" . PHP_EOL;
        echo addSeparator("-", length:$tableLength);
        
        foreach ($extractedMessage as $msg) {
            echo addRow("Message:", STR_PAD_RIGHT, $tableLength);
            echo addRow($msg, STR_PAD_RIGHT, $tableLength);
        }
    }, $tableLength);

    # Stop proccess
    exit;
}