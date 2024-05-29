<?php


/**
 * Get all plugins
 * @function getAllPlugins
 * @return array
 */
function getAllPlugins(): array {
    # Scan plugins DIR to get module names
    $plugins = scandir("plugins");

    # Remove "." & ".." to clean $plugins
    array_shift($plugins);
    array_shift($plugins);   
    
    
    return $plugins;
}