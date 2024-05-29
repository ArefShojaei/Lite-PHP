<?php

/**
 * Escape query
 * @function _escapeQuery
 * @private
 * @param object $connection
 * @param string $query
 * @param array $params
 * @return void
 */
function _escapeQuery(object $connection, string &$query, array $params): void {
    # Replace ( ? to '?' ) in the query as string
    $query = str_replace("?", "'?'", $query);

    # Get escaped the query as new array
    $scapedParams = array_map(function($param) use ($connection) {
        return mysqli_real_escape_string($connection, $param);
    }, $params);

    # Replace "?" to "%s" in the query
    $query = preg_replace("/\?/", "%s", $query);

    # Update the query to use for the $scapedParams
    $query = vsprintf($query, $scapedParams);    
}