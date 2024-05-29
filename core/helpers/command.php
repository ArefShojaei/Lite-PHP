<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");



/**
 * add command
 * @function addCommand
 * @param string $command command name
 * @param string|callable $action command action
 * @param string $description command description
 * @return void
 */
function addCommand(string $command, string|callable $action, string $description = ""): void {
    $prefix = useGlobal("command-prefix");

    $combinedComamnd = $prefix . $command;

    useState("commands.{$combinedComamnd}", [
        "action" => $action,
        "description" => $description
    ]);
}


/**
 * group command
 * @function groupCommand
 * @param string $command preifx command name
 * @param callable $action bind commands action
 * @return void
 */
function groupCommand(string $command, callable $aciton): void {
    useState("command-prefix", $command);
    
    $aciton();
    
    useState("command-prefix", "");
}