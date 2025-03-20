<?php


function _loadCommands(): void {
    $commands = scandir("console/commands");

    # Remove "." & ".." from the commands
    array_shift($commands);
    array_shift($commands);

 
    foreach ($commands as $DIR) {
        file_exists("console/commands/{$DIR}/main.php") &&  import("@commands/{$DIR}/main");
    }
}