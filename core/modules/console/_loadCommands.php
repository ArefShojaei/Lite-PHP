<?php

/**
 * Load commands from DIR as name
 * @function _loadCommands
 * @return void
 */
function _loadCommands(): void {
    # List of commands as Array
    $commands = scandir("console/commands");

    # Remove "." & ".." from the commands
    array_shift($commands);
    array_shift($commands);

    # Load main command file for specific name
    foreach ($commands as $DIR) {
        file_exists("console/commands/{$DIR}/main.php") &&  import("@commands/{$DIR}/main");
    }
}