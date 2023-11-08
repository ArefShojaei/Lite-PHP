<?php

/**
 * @desc register all modules
 * @function createModule
 * @param {callback} $action
 * @return {void}
 */
function createModule(callable $action): void {
    $action();
}