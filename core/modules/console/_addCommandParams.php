<?php


function _addCommandParams(array $command): array {
    $params = [];

    foreach ($command as $key => $value) {
        if(is_int($key)) continue;

        array_push($params, $value);
    }

    return $params;
}