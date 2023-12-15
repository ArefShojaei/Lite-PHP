<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * request route query string
 * @function _query
 * @private
 * @return array
 */
function _query(): array {
    # parse the query string
    parse_str(useHTTP("QUERY_STRING"), $queries);
        
    # remove first data from the $queries
    array_shift($queries);

    # return the $queries
    return $queries;
}