<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * @desc route query string
 * @function useQuery
 * @param {string} $key
 * @return {array|string}
 */
function useQuery(string $key = null): array|string {
    $queries = useHTTP("QUERY_STRING");

    parse_str($queries, $parsedQueries);

    return !((bool) $key) ? $parsedQueries : $parsedQueries[$key];
}