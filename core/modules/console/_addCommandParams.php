<?php

/**
 * Add command params
 * @function _addCommandParams
 * @param array $data command data
 * @return array
 */
function _addCommandParams(array $command): array {
    $params = [];

    foreach ($command as $key => $value) {
        if(is_int($key)) continue;

        array_push($params, $value);
    }

    return $params;
}