<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * find exact command
 * @function _findCommand
 * @param array $input input data about command
 * @return array
 */
function _findCommand(array $input): array {
    # list of command patterns
    $commands = useGlobal("commands");

    # remove "cli" value of the input
    array_shift($input);

    # search to find exact command
    foreach ($commands as $command => $data) {
        # declare regex pattern
        $pattern = "/^" . str_replace(["{", "}"], ["(?<", ">.+)"], $command) . "$/";

        # is matched comamnd with the regex
        preg_match($pattern, join(" ", $input), $result);

        # return matched command
        if(count($result)) break;
    }
    
    return [$result, $data];
}