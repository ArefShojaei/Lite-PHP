<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * run mysql query
 * @function useQuery
 * @param string $query sql query
 * @return bool|array
 */
function useQuery(string $query): bool|array {
    $connection = useGlobal("mysql");

    preg_match("/select|SELECT/", $query, $isMatch);
    
    $result = mysqli_query($connection, $query);

    if((bool) $isMatch) {
        $response = [];

        while($row = mysqli_fetch_assoc($result)) {
            array_push($response, $row);
        }

        return $response;
    }

    return true;
}