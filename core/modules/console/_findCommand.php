<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * Find exact command
 * @function _findCommand
 * @param array $input input data about command
 * @return array
 */
function _findCommand(array $input): array {
    # List of command patterns
    $commands = useGlobal("commands");

    # Remove "cli" value of the input
    array_shift($input);

    # Search to find exact command
    foreach ($commands as $command => $data) {
        # Declare regex pattern
        $pattern = "/^" . str_replace(["{", "}"], ["(?<", ">(\w|[-_])+)"], $command) . "$/";

        # Is matched comamnd with the regex
        preg_match($pattern, join(" ", $input), $result);

        # Get matched command
        if(count($result)) break;
    }
    
    return [$result, $data];
}