<?php

/**
 * @package
 */
import("@core/hooks/useState");
import("@core/hooks/useType");
import("@core/hooks/useError");


/**
 * init database
 * @function createDatabase
 * @param string $host mysql host
 * @param string $username mysql username
 * @param string $passowrd mysql password
 * @param string $db mysql database
 * @return void
 */
function createDatabase(string $host, string $username, string $password = "", string $db = null): void {
    try {
        # mysql connection
        $connection = mysqli_connect($host, $username, $password, $db);
    
        # set state
        useState("database", [], $connection);
    } catch (Exception $e){
        # add content type
        useType("application/json");

        # error info
        $response = [
            "message" => "Database can't be connected!",
            "error" => $e->getMessage()
        ];

        # show the info as json content
        useError(json_encode($response));
    }
}