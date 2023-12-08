<?php

/**
 * register all modules
 * @function createModule
 * @param callable $action
 * @return void
 */
function createModule(callable $action): void {
    # call the $action for register all modules and plugins
    $action();
}