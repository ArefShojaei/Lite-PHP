<?php

/**
 * run mysql query
 * @function useQuery
 * @param string $query sql query
 * @return string
 */
function useQuery(string $query): bool|array|null {
    $connection = $GLOBALS["container"]["mysql"];

    preg_match("/select|SELECT/", $query, $isMatch);
    
    $result = mysqli_query($connection, $query);

    if((bool) $isMatch) {
        return mysqli_fetch_all($result);
    }

    return true;
}