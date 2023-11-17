<?php

/**
 * use state
 * @param string|int|bool|array $value
 * @return array
 */
function useState(string|int|bool|array $value): array {
    $state = $value;

    $setState = function ($action) use (&$state) {
        $state = $action($state);
    };

    $getState = function () use (&$state) {
        return $state;
    };


    return [$getState, $setState];
}