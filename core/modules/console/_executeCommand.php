<?php

/**
 * run command in console
 * @function _executeCommand
 * @param array $command command data
 * @param array $params command params
 * @return void
 */
function _executeCommand($command, $params): void {
    echo call_user_func($command["action"], ...$params);
}