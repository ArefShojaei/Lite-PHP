<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * route query string
 * @function useQuery
 * @param string|null $key query key
 * @return array|string
 */
function useQueryParam(?string $key = null): array|string {
    $queries = useHTTP("QUERY_STRING");

    parse_str($queries, $parsedQueries);

    return !((bool) $key) ? $parsedQueries : $parsedQueries[$key];
}