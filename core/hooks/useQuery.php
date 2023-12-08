<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");


/**
 * use mysql query
 * @function useQuery
 * @param string $query sql query
 * @return true|array
 */
function useQuery(string $query, array $params = []): true|array {
    # get mysql connection
    $connection = useGlobal("mysql");

    # declare pattern for the "select" query
    preg_match("/select|SELECT/", $query, $isMatch);

    # escape the query
    if(count($params)) {
        # get escaped the query as new array
        $scapedParams = array_map(function($param) use ($connection) {
            return mysqli_real_escape_string($connection, $param);
        }, $params);

        # replace "?" to "%s" in the query
        $query = preg_replace("/\?/", "%s", $query);

        # update the query to use for the $scapedParams
        $query = vsprintf($query, $scapedParams);
    }

    # run the query
    $result = mysqli_query($connection, $query);

    # is the "select" query
    if((bool) $isMatch) {
        # declare to extract data from the database and adding to this array as the response data
        $response = [];

        # add new data of the $result to the $response array
        while($row = mysqli_fetch_assoc($result)) {
            array_push($response, $row);
        }
        
        # is empty data
        if(!count($response)) {
            return $response;
        }

        # return the $response
        return count($response) > 1 ? $response : $response[0];
    }

    # the query was run successfully
    return true;
}