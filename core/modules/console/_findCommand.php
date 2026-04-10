<?php

import("@core/hooks/useGlobal");
import("@core/hooks/useMatch");


function _findCommand(array $input): array {
    $commands = useGlobal("commands");

    # Remove "cli" value of the input
    array_shift($input);

    foreach ($commands as $command => $data) {
        $pattern = "/^" . str_replace(["{", "}"], ["(?<", ">(\w|[-_:\/.?=&@])+)"], $command) . "$/";

        $matches = useMatch($pattern, join(" ", $input));

        # Get matched command
        if(count($matches)) break;
    }
    
    return [$matches, $data];
}