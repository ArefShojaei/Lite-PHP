<?php

import("@core/hooks/useGlobal");
import("@core/helpers/table");
import("@commands/test/_shared");
import("@commands/list/_shared");



function listRoute(): void {
    $routes = useGlobal("routes");
    
    # Table chilren index    
    $count = 0;

    # Table size
    $length = 45;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 16;
    $thirdColumn = 22;


    # Table structure
    createTable(function () use ($length, $routes, $count, $firstColumn, $secoundColumn, $thirdColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Method", length: $secoundColumn, position: STR_PAD_BOTH) .
             addColumn("Method", length: $thirdColumn, position: STR_PAD_BOTH, isLast: true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($routes as $method => $params) {
            foreach ($params as $route => $_) {
                $count++;

                echo addColumn($count, length: $firstColumn, position: STR_PAD_BOTH) .
                     addColumn($method, length: $secoundColumn, position: STR_PAD_BOTH) .
                     addColumn($route, length: $thirdColumn, position: STR_PAD_BOTH, isLast: true) . PHP_EOL;
            }
        }
    }, $length);
}


function listAlias(): void {
    $aliases = useGlobal("aliases");
    
    # Table chilren index
    $count = 0;

    # Table size
    $length = 83;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 16;
    $thirdColumn = 60;


    # Table structure
    createTable(function () use ($length, $aliases, $count, $firstColumn, $secoundColumn, $thirdColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Alias", length: $secoundColumn, position: STR_PAD_BOTH) .
             addColumn("Path", length: $thirdColumn, position: STR_PAD_BOTH, isLast: true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($aliases as $alias => $path) {
            $count++;

            echo addColumn($count, length: $firstColumn, position:STR_PAD_BOTH) .
                 addColumn($alias, length: $secoundColumn) .
                 addColumn($path, length: $thirdColumn, isLast: true) . PHP_EOL;
        }
    }, $length);
}


function listCommand(): void {
    $commands = useGlobal("commands");
    
    # Table chilren index
    $count = 0;

    # Table size
    $length = 90;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 40;
    $thirdColumn = 43;
    
    
    # Table structure
    createTable(function () use ($length, $commands, $count, $firstColumn, $secoundColumn, $thirdColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Command", length: $secoundColumn, position: STR_PAD_BOTH) .
             addColumn("Description", length: $thirdColumn, position: STR_PAD_BOTH, isLast: true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($commands as $command => $params) {
            $count++;

            echo addColumn($count, length: $firstColumn, position:STR_PAD_BOTH) .
                 addColumn($command, length: $secoundColumn) .
                 addColumn($params['description'], length: $thirdColumn, isLast: true) . PHP_EOL;
        }
    }, $length);
}


function listEnv(): void {
    # Table chilren index
    $count = 0;

    # Table size
    $length = 43;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 16;
    $thirdColumn = 20;


    # Table structure
    createTable(function () use ($length, $count, $firstColumn, $secoundColumn, $thirdColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Alias", length: $secoundColumn, position: STR_PAD_BOTH) .
             addColumn("Path", length: $thirdColumn, position: STR_PAD_BOTH, isLast: true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($_ENV as $key => $value) {
            $count++;

            echo addColumn($count, length: $firstColumn, position:STR_PAD_BOTH) .
                 addColumn($key, length: $secoundColumn) .
                 addColumn($value, length: $thirdColumn, isLast: true) . PHP_EOL;
        }
    }, $length);
}


function listModule(): void {
    $modules = getAllModules();

    # Table chilren index
    $count = 0;

    # Table size
    $length = 21;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 15;


    # Table structure
    createTable(function () use ($length, $count, $modules, $firstColumn, $secoundColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Module", length: $secoundColumn, position: STR_PAD_BOTH, isLast:true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($modules as $module) {
            $count++;

            echo addColumn($count, length: $firstColumn, position:STR_PAD_BOTH) .
                 addColumn($module, length: $secoundColumn, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
        }
    }, $length);
}


function listPlugin(): void {
    $plugins = getAllPlugins();
    
    # Table chilren index
    $count = 0;

    # Table size
    $length = 30;

    # Column sizes
    $firstColumn = 5;
    $secoundColumn = 24;


    # Table
    createTable(function () use ($length, $count, $plugins, $firstColumn, $secoundColumn) {
        echo addColumn("Index", length: $firstColumn, position: STR_PAD_BOTH) .
             addColumn("Plugin", length: $secoundColumn, position: STR_PAD_BOTH, isLast:true) . PHP_EOL;

        echo addSeparator(length: $length);

        foreach ($plugins as $plugin) {
            $count++;

            echo addColumn($count, length: $firstColumn, position:STR_PAD_BOTH) .
                 addColumn($plugin, length: $secoundColumn, position:STR_PAD_BOTH, isLast:true) . PHP_EOL;
        }
    }, $length);
}
