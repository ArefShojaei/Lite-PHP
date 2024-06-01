<?php

/**
 * @package
 */
require_once dirname(__DIR__, 2) . "/helpers/table.php";


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
    ];

    # Extract Error report message
    $extractedMessage = explode(": ", $exceptionReport["message"]);

    # Table structure
    $tableLength = 85; 

    createTable(function () use ($exceptionReport, $extractedMessage, $tableLength) {
        echo addRow("PHP Debugger - {$exceptionReport['title']}", length: $tableLength);
        echo addSeparator(length:$tableLength);
        echo addColumn("File: {$exceptionReport['file']}", length:$tableLength - 5) . addColumn("Line: {$exceptionReport['line']}", STR_PAD_BOTH, $tableLength - 71) . "|" . PHP_EOL;
        echo addSeparator("-", length:$tableLength);
        
        foreach ($extractedMessage as $msg) {
            echo addRow("Message:", STR_PAD_RIGHT, $tableLength);
            echo addRow($msg, STR_PAD_RIGHT, $tableLength);
        }
    }, $tableLength);

    # Stop proccess
    exit;
}