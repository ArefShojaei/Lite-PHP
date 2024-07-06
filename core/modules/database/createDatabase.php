<?php

import("@core/hooks/useState");
import("@core/hooks/useType");
import("@core/hooks/useError");


/**
 * @param $host Mysql host
 * @param $username Mysql username
 * @param $passowrd Mysql password
 * @param $db mysql Mysql database name
 */
function createDatabase(string $host, string $username, string $password = "", string $db = null): void {
    try {
        $connection = mysqli_connect($host, $username, $password, $db);
    
        # Set state
        useState("database", $connection);
    } catch (Exception $e){
        useType("application/json");

        $error = [
            "message" => "Database can't be connected!",
            "error" => $e->getMessage()
        ];

        # Show the info as json content
        die(json_encode($error));
    }
}