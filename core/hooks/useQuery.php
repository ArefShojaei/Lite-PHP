<?php

import("@core/hooks/useGlobal");
import("@core/hooks/useMatch");
import("@core/shared/hooks/useQuery/_escapeQuery");
import("@core/shared/hooks/useQuery/_getDataFromDatabase");


/**
 * Query to database
 */
function useQuery(string $sql, array $params = []): bool|array {
    $connection = useGlobal("database");

    $pattern = "/select|SELECT/";

    $isMatched = useMatch($pattern, $sql);

    if (count($params)) _escapeQuery($connection, $sql, $params);

    $result = mysqli_query($connection, $sql);

    # Is the "select" query
    if ((bool) $isMatched) return _getDataFromDatabase($result);

    # Signal message: The query was execute successfully
    return true;
}