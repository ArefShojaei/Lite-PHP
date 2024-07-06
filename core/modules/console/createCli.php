<?php

import("@core/hooks/useGlobal");
import("@core/modules/console/_loadCommands");
import("@core/modules/console/_findCommand");
import("@core/modules/console/_isMatchedCommand");
import("@core/modules/console/_addCommandParams");
import("@core/modules/console/_executeCommand");


/**
 * @param $input Command input data
 */
function createCli(array $input): void {
    _loadCommands();

    list($command, $data) = _findCommand($input);

    _isMatchedCommand($command);

    # Add command params
    $minCommandParamCount = 1;

    $params = (count($command) > $minCommandParamCount) ? _addCommandParams($command) : [];


    _executeCommand($data, $params);
}