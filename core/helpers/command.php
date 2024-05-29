<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useGlobal");



/**
 * Add command
 * @function addCommand
 * @param string $command Command name
 * @param string|callable $action Command action
 * @param string $description Command description
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
 * Group command
 * @function groupCommand
 * @param string $prefix Command prefix
 * @param callable $action bind commands action
 * @return void
 */
function groupCommand(string $preifx, callable $aciton): void {
    useState("command-prefix", $preifx);
    
    $aciton();
    
    useState("command-prefix", "");
}