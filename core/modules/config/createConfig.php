<?php

/**
 * @desc register config
 * @function createConfig
 * @param {string} $name
 * @param {array} $params
 * @return {void}
 */
function createConfig(string $name, array $params): void {
    $GLOBALS["container"]["configs"][$name] = $params;
}