<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useType");
import("@core/hooks/useError");


/**
 * Setup database
 * @function createDatabase
 * @param string $host Mysql host
 * @param string $username Mysql username
 * @param string $passowrd Mysql password
 * @param string $db mysql Mysql database name
 * @return void
 */
function createDatabase(string $host, string $username, string $password = "", string $db = null): void {
    try {
        # Mysql connection
        $connection = mysqli_connect($host, $username, $password, $db);
    
        # Set state
        useState("database", $connection);
    } catch (Exception $e){
        # Add content type
        useType("application/json");

        # Error info
        $response = [
            "message" => "Database can't be connected!",
            "error" => $e->getMessage()
        ];

        # Show the info as json content
        die(json_encode($response));
    }
}