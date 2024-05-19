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
 * init CLI
 * @param array $input command input data
 * @return void
 */
function createCli(array $input): void {
    # load comamnds
    _loadCommands();

    # find command
    list($command, $data) = _findCommand($input);

    # check to match command 
    _isMatchedCommand($command);

    # add command params
    $minCommandParamCount = 1;

    $params = (count($command) > $minCommandParamCount) ? _addCommandParams($command) : [];


    # run command 
    _executeCommand($data, $params);
}