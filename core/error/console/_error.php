<?php

require_once dirname(__DIR__, 2) . "/helpers/table.php";


function setCustomError(int $type, string $message, string $file, int $line): void {
    $error = [
        "title" => "Error",
        "type" => $type,
        "message" => $message,
        "file" => $file,
        "line" => $line,
    ];

    $extractedMessage = explode(": ", $error["message"]);

    # Table structure
    $tableLength = 85;

    createTable(function () use ($error, $extractedMessage, $tableLength) {
        echo addRow("PHP {$error['title']} Reporter", length: $tableLength);
        echo addSeparator(length: $tableLength);
        echo addColumn("File: {$error['file']}", length: $tableLength - 5) . addColumn("Line: {$error['line']}", STR_PAD_BOTH, $tableLength - 71) . "|" . PHP_EOL;
        echo addSeparator("-", length: $tableLength);

        foreach ($extractedMessage as $msg) {
            echo addRow("Message:", STR_PAD_RIGHT, $tableLength);
            echo addRow($msg, STR_PAD_RIGHT, $tableLength);
        }
    }, $tableLength);

    # Stop process
    exit;
}
