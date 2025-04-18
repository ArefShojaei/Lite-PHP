<?php

function _getAllPlugins(): array {
    $plugins = scandir("plugins");

    # Remove "." & ".." to clean $plugins
    array_shift($plugins);
    array_shift($plugins);   
    
    
    return $plugins;
}