<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");
import("@core/hooks/useMatch");
import("@core/private/hooks/useQuery/_escapeQuery");
import("@core/private/hooks/useQuery/_getDataFromDatabase");


/**
 * use mysql query
 * @function useQuery
 * @param string $query sql query
 * @return bool|array
 */
function useQuery(string $query, array $params = []): bool|array {
    # get mysql connection
    $connection = useGlobal("mysql");

    # decalre regex as pattern for the select query
    $pattern = "/select|SELECT/";

    # declare pattern for the "select" query
    $isMatch = useMatch($pattern, $query);

    # escape the query
    if(count($params)) _escapeQuery($connection, $query, $params);

    # run the query
    $result = mysqli_query($connection, $query);

    # is the "select" query
    if((bool) $isMatch) return _getDataFromDatabase($result);

    # the query was run successfully
    return true;
}