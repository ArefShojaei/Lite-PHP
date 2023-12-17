<?php

/**
 * escape query
 * @function _escapeQuery
 * @private
 * @param object $connection
 * @param string $query
 * @param array $params
 * @return void
 */
function _escapeQuery(object $connection, string $query, array $params): void {
    # replace ( ? to '?' ) in the query as string
    $query = str_replace("?", "'?'", $query);

    # get escaped the query as new array
    $scapedParams = array_map(function($param) use ($connection) {
        return mysqli_real_escape_string($connection, $param);
    }, $params);

    # replace "?" to "%s" in the query
    $query = preg_replace("/\?/", "%s", $query);

    # update the query to use for the $scapedParams
    $query = vsprintf($query, $scapedParams);    
}