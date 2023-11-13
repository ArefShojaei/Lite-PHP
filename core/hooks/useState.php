<?php

/**
 * declare state
 * @param string|int|bool|array $value
 * @return array
 */
function useState(string|int|bool|array $value): array {
    $state = $value;
    
    function setState(callable $action) {
        global $state;

        $state = $action($state);
    }

    return [$state, 'setState'];
}