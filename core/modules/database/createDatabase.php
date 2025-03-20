<?php

import("@core/hooks/useState");
import("@core/hooks/useType");
import("@core/hooks/useError");


/**
 * Mysql database configuration
 * @param $host host
 * @param $username username
 * @param $passowrd password
 * @param $db mysql database name
 */
function createDatabase(string $host, string $username, string $password = "", string $db = null): void {
    try {
        $connection = mysqli_connect($host, $username, $password, $db);
    
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