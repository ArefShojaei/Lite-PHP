<?php

/**
 * @package
 */
require_once dirname(__DIR__, 2) . "/helpers/table.php";


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

    # Extract Error report message
    $extractedMessage = explode(": ", $errorReport["message"]);

    # Table structure
    $tableLength = 85; 

    createTable(function () use ($errorReport, $extractedMessage, $tableLength) {
        echo addRow("PHP Debugger - {$errorReport['title']}", length: $tableLength);
        echo addSeparator(length:$tableLength);
        echo addColumn("File: {$errorReport['file']}", length:$tableLength - 5) . addColumn("Line: {$errorReport['line']}", STR_PAD_BOTH, $tableLength - 71) . "|" . PHP_EOL;
        echo addSeparator("-", length:$tableLength);
        
        foreach ($extractedMessage as $msg) {
            echo addRow("Message:", STR_PAD_RIGHT, $tableLength);
            echo addRow($msg, STR_PAD_RIGHT, $tableLength);
        }
    }, $tableLength);

    # Stop proccess
    exit;
}
