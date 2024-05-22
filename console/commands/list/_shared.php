<?php


/**
 * get all plugins
 * @function getAllPlugins
 * @return array
 */
function getAllPlugins(): array {
    # scan plugins DIR to get module names
    $plugins = scandir("plugins");

    # remove "." & ".." to clean $plugins
    array_shift($plugins);
    array_shift($plugins);   
    
    
    return $plugins;
}