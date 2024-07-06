<?php

import("@core/hooks/useState");
import("@core/hooks/useGlobal");


function addCommand(string $command, string|callable $action, string $description = ""): void {
    $prefix = useGlobal("command-prefix");

    $combinedComamnd = $prefix . $command;

    useState("commands.{$combinedComamnd}", [
        "action" => $action,
        "description" => $description
    ]);
}

function groupCommand(string $preifx, callable $aciton): void {
    useState("command-prefix", $preifx);
    
    $aciton();
    
    useState("command-prefix", "");
}