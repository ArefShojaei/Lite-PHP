<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");
import("@core/modules/console/_loadCommands");
import("@core/modules/console/_findCommand");
import("@core/modules/console/_isMatchedCommand");
import("@core/modules/console/_addCommandParams");
import("@core/modules/console/_executeCommand");


/**
 * Setup CLI
 * @param array $input Command input data
 * @return void
 */
function createCli(array $input): void {
    # Load comamnds
    _loadCommands();

    # Find command
    list($command, $data) = _findCommand($input);

    # Check to match command 
    _isMatchedCommand($command);

    # Add command params
    $minCommandParamCount = 1;

    $params = (count($command) > $minCommandParamCount) ? _addCommandParams($command) : [];


    # Run command 
    _executeCommand($data, $params);
}