<?php

function dd(array $input, $isDied = true) {
    echo "<pre>";
    print_r($input);
    
    if($isDied) exit;
}