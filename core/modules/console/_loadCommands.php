<?php

/**
 * load commands from DIR as name
 * @function _loadCommands
 * @return void
 */
function _loadCommands(): void {
    # list of commands as Array
    $commands = scandir("console/commands");

    # remove "." & ".." from the commands
    array_shift($commands);
    array_shift($commands);

    # load main command file for specific name
    foreach ($commands as $DIR) {
        file_exists("console/commands/{$DIR}/main.php") &&  import("@commands/{$DIR}/main");
    }
}