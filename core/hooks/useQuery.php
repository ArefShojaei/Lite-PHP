<?php

/**
 * @package
 */
import("@core/hooks/useGlobal");
import("@core/hooks/useMatch");
import("@core/shared/hooks/useQuery/_escapeQuery");
import("@core/shared/hooks/useQuery/_getDataFromDatabase");


/**
 * Query to database
 * @function useQuery
 * @param string $query SQL query
 * @return bool|array
 */
function useQuery(string $query, array $params = []): bool|array {
    # Get database connection
    $connection = useGlobal("database");

    # Decalre regex as pattern for the select query
    $pattern = "/select|SELECT/";

    # Declare pattern for the "select" query
    $isMatch = useMatch($pattern, $query);

    # Escape the query
    if (count($params)) _escapeQuery($connection, $query, $params);

    # Run the query
    $result = mysqli_query($connection, $query);

    # Is the "select" query
    if ((bool) $isMatch) return _getDataFromDatabase($result);

    # Signal message: The query was run successfully
    return true;
}