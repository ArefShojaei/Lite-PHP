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
function useQuery(string $query, array $params = []): bool|array {
    $connection = useGlobal("mysql");

    preg_match("/select|SELECT/", $query, $isMatch);

    
    if(count($params)) {
        $scapedParams = array_map(function($param) use ($connection) {
            return mysqli_real_escape_string($connection, $param);
        }, $params);

        $query = preg_replace("/\?/", "%s", $query);

        $query = vsprintf($query, $scapedParams);
    }

    $result = mysqli_query($connection, $query);

    if((bool) $isMatch) {
        $response = [];

        while($row = mysqli_fetch_assoc($result)) {
            array_push($response, $row);
        }
        return count($response) > 1 ? $response : $response[0];
    }

    return true;
}