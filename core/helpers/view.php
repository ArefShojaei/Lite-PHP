<?php

/**
 * @desc render view
 * @function view
 * @param {string} $name - view name
 * @param {array} $data - view data
 * @example view('home', ['title' => 'Home Page']) # views/home.php + [...]
 * @return {string}
 */
function view(string $name, array $data = []) {
    $filePath = "views/{$name}.php";

    extract($data);

    include $filePath;
}