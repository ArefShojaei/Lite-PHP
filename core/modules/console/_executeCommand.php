<?php


function _executeCommand(array $command, array $params): void {
    echo call_user_func($command["action"], ...$params);
}