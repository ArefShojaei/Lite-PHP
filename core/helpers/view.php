<?php

/**
 * render view
 * @function view
 * @param string $name view name
 * @param array $data view data
 * @return void
 */
function view(string $name, array $data = []): void {
    $filePath = "views/{$name}.php";

    extract($data);

    include $filePath;
}