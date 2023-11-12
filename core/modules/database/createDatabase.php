<?php

/**
 * init database
 * @function createDatabase
 * @param string $host mysql host
 * @param string $username mysql username
 * @param string $passowrd mysql password
 * @param string $db mysql database
 * @return void
 */
function createDatabase(string $host, string $username, string $password, string $db): void {
    $GLOBALS["mysql"] = mysqli_connect($host, $username, $password, $db); 
}