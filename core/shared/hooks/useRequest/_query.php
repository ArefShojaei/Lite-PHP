<?php

/**
 * @package
 */
import("@core/hooks/useHTTP");


/**
 * Request route query string
 * @function _query
 * @private
 * @return array
 */
function _query(): array {
    # Parse the query string
    parse_str(useHTTP("QUERY_STRING"), $queries);
        
    # Remove first data from the $queries
    array_shift($queries);

    # Get the queries
    return $queries;
}