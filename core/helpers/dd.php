<?php

/**
 * dump and die an Array
 * @param array $input
 * @param bool $isDied
 * @return void
 */
function dd(array $input, bool $isDied = true): void {
    echo "<pre>";
    print_r($input);
    
    if($isDied) exit;
}